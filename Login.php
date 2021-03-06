<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="header_footer.css">
    <link rel="Stylesheet" href="Login.css">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong> Training & Placement</strong></div>
    <ul class="links">
        <li><a  href="index.php">Home</a></li>
        <li><a href="trainings.php">Training</a></li>
        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>  
        <li><a href="ApplyNow.php">Apply Now</a></li>
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
                <h1>Login</h1>
                <p>No Account? <a href="signup.php">Sign Up</a></p>
            </div>
            <div class="box">
                <form method="POST" class="form">
                    <input type="email" name="email" class="username" placeholder="Email" required>
                    <input type="password" name="password"class="password" placeholder="Password" required>
                    <input type="submit" name="submit" class="button" value="Login">
                </form>
            </div>
        </div>
    </main>
</body>
</html>
<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from signup where email = '$email' ";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['Pass'];

            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){
                ?>
                    <script>
                        alert("Login Successfull!"); 
                    </script>
                    <?php
                    header('location:index.php');
            }else{
                ?>
                    <script>
                        alert("Password Incorrect"); 
                    </script>
                    <?php
            }
        }else{
            ?>
                    <script>
                        alert("Invalid Email!"); 
                    </script>
                    <?php
        }
    }
?>