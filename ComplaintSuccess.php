<?php
session_start();
$uname=$_SESSION["username"];
$con=mysqli_connect('localhost','root','','hostel_registration') or die(mysqli_error($con));
//$cat=mysqli_real_escape_string($con, $_POST['complaint_category']);
$cat="Electrical";
$desc=mysqli_real_escape_string($con, $_POST['description']);
$rep=mysqli_real_escape_string($con, $_POST['report']);


$query="insert into complaint(roll_no,description,report,category) values('$uname','$desc','$rep', '$cat')";
mysqli_query($con, $query);
echo "yes";
