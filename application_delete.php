<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery = " delete from application where id=$id ";

$query = mysqli_query($con, $deletequery);

header('location:applicationformdisplay.php');
?>
