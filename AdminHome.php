<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="Stylesheet" href="css/stylenew.css">
    <link rel="Stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css//bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        .main-div{
			width: 100%;
			height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.center-div{
			width: 90%;
			height: 80vh;
			background: #a1a7b4;
			padding: 20px 0 0 0;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
			border-radius: 10px;
		}
		h1{
			font-size: 18px;
			color: #000;
			text-align: center;
			margin-top: -20px;
			margin-bottom: 20px;
		}
		table{
			border-collapse: collapse;
			background: #fff;
			box-shadow: 0 10px 0 rgba(0,0,0,.03);
			border-radius: 10px;
			margin: auto;
		}
		th,td{
			border: 1px solid #f2f2f2;
			padding: 8px 30px;
			text-align: center;
			color: grey;
		}
		th{
			text-transform: uppercase;
			font-weight: 500;
		}
		td{font-size: 13px;}
		.fa{
			font-size: 18px;
		}
		.fa-edit{
			color: #63c76a;
		}
		.fa-trash{ color: #ff0000; }
    </style>    
</head>
<body>
    <!--Nav Bar Starts here-->
    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong> Welcome Admin!</strong></div>
    <ul class="links">
        <li><a class="active" href="AdminHome.php">Users Contacted</a></li>
        <li><a href="applicationformdisplay.php">Application Recieved</a></li>
        <li><a href="Logout.php">Logout</a></li>  
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>
    <!--Nav Bar ends here-->
    <div class="main-div">
        <h1>List of the People Contacted</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            
                            <th>Mobile Number</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include 'connect.php';

                            $selectquery = "select * from contactus";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                        <tr>
                            <td><?php echo $res['Id'] ?></td>
                            <td><?php echo $res['Name'] ?></td>
                            <td><?php echo $res['Email'] ?></td>
                            <td><?php echo $res['Mobno'] ?></td>
                            <td><?php echo $res['Message'] ?></td>
                            <td><a href="contact_delete.php?id=<?php echo $res['Id']; ?>">Delete</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </div>

</body>
</html>


