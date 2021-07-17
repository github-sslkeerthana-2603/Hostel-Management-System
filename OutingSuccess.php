<?php
session_start();
$uname=$_SESSION["username"];
$con=mysqli_connect('localhost','root','','hostel_registration') or die(mysqli_error($con));
$exptime=mysqli_real_escape_string($con, $_POST['expected_time']);
$outtime=mysqli_real_escape_string($con, $_POST['out_time']);
$intime=mysqli_real_escape_string($con, $_POST['in_time']);
$vphno=mysqli_real_escape_string($con, $_POST['parent_phone']);
$purpose=mysqli_real_escape_string($con, $_POST['purpose']);
$rel=mysqli_real_escape_string($con, $_POST['relation']);
$loc=mysqli_real_escape_string($con, $_POST['visitor_phone']);
$vname=mysqli_real_escape_string($con, $_POST['visitor_name']);

$query="insert into outingDetails(roll_no,vphno,vname,relation,purpose,exp_time,in_time,out_time,loc) values('$uname',
'$vphno','$vname', '$rel', '$purpose', '$exptime', '$intime','$outtime','$loc')";
mysqli_query($con, $query);
echo "yes";
