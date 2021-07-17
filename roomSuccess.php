<?php
session_start();
echo "open";
$block=$_SESSION["block"];
$val=$_COOKIE["var"]+1;
//$reg=$_SESSION["username"];
switch ($block){
	case "Munneru":
	$query = "select status from munneru";
	break;
	
	case 'Bhima':
	$query = "select status from bheema";
	echo "yes";
	break;
	
	case "Ghataprabha":
	$query = "select status from ghataprabha";
	break;
	
	case "Krishnaveni":
	$query = "select status from krishnaveni";
	break;
	
	case "3rd year hostel":
	$query = "select status from room_allotment";
    break;
	
	case "Banganga":
	$query = "select status from banganga";
	break;
	
	case "Sabari":
	$query = "select status from sabari";
	break;
	
	case "Godavari":
	$query = "select status from godavari";
	break;
	
	case "Manjeera":
	$query = "select status from manjeera";
	break;
	
	case "Munneru":
	$query = "select status from munneru";
	break;
	
	case "Indravathi":
	$query = "select status from indravathi";
	break;
	
	case "Pranahitha":
	$query = "select status from pranahitha";
	break;
	
	default:
	echo "wrong";
}
$con=mysqli_connect("localhost","root","","hostel_registration") or die(mysqli_error($con));
$query1="update  room_allotment set no=no+1 where no<2 && room_no='$val'";
$query2=" update room_allotment set status='full' where no=2 && room_no='$val'";
$query3=" update room_allotment set status='partially' where no=1 && room_no='$val'";
//$query="insert into rooms(registration_no,room_no) values('$reg','$val')";
//$insert="update student_info set room_no='',hostel_name='' where registration_no='$reg'";
$query1_result=mysqli_query($con, $query1) or die(mysqli_error($con));
$query2_result=mysqli_query($con, $query2) or die(mysqli_error($con));
$query3_result=mysqli_query($con, $query3) or die(mysqli_error($con));
//$query_result=mysqli_query($con, $query) or die(mysqli_error($con));
//$insert_result=mysqli_query($con, $insert) or die(mysqli_error($con));
echo "successfull";
echo $_COOKIE["var"]+1;
?>                  