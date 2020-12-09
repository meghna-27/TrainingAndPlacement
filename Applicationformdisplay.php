<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="css/stylenew.css">
    <link rel="Stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css//bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Contact form </title>
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
<nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong> Welcome Admin!</strong></div>
    <ul class="links">
        <li><a href="AdminHome.php">Users Contacted</a></li>
        <li><a class="active" href="applicationformdisplay.php">Application Recieved</a></li>
        <li><a href="Logout.php">Logout</a></li>  
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>

    <div class="main-div">
        <h1>List of the Application Recieved</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Birth Date</th>
                            <th>Email Address</th>
                            <th>Address 1</th>
                            <th>Address 2</th>
                            <th>State</th>
                            <th>Zip/Postal Code</th>
                            <th>City</th>
                            <th>Available Start date</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                include 'connect.php';

                                $selectquery = "select * from application";

                                $query = mysqli_query($con,$selectquery);

                                while($res = mysqli_fetch_array($query)){
                            ?>
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['fname'] ?></td>
                            <td><?php echo $res['lname'] ?></td>
                            <td><?php echo $res['phone'] ?></td>
                            <td><?php echo $res['birthday'] ?></td>
                            <td><?php echo $res['eaddress'] ?></td>
                            <td><?php echo $res['address1'] ?></td>
                            <td><?php echo $res['address2'] ?></td>
                            <td><?php echo $res['state'] ?></td>
                            <td><?php echo $res['zip'] ?></td>
                            <td><?php echo $res['city'] ?></td>
                            <td><?php echo $res['startdate'] ?></td>
                            <td><a href="application_delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
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