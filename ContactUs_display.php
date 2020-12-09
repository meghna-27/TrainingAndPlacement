<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			background: #36486c;
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
                        <tr>
                            <?php
                                include 'connect.php';

                                $selectquery = "select * from contactus";

                                $query = mysqli_query($con,$selectquery);

                                while($res = mysqli_fetch_array($query)){
                            ?>
                            <td><?php echo $res['Id'] ?></td>
                            <td><?php echo $res['Name'] ?></td>
                            <td><?php echo $res['Email'] ?></td>
                            <td><?php echo $res['Mobno'] ?></td>
                            <td><?php echo $res['Message'] ?></td>
                            <td>Edit</td>
                            <td>Delete</td>
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