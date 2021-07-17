<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

//sessionStorage.setItem("ChiefWardenPageView","Outing");

</script>
<?php
session_start();
echo $_SESSION["username"];
?>
<?php

$con=mysqli_connect('localhost','root','','hostel_registration') or die(mysqli_error($con));
$var=$_SESSION["username"];
$query="select * from student_info where roll_no = '411842' ";
$query_result=  mysqli_query($con, $query) or die("query is not executed" .mysqli_error($con));
$row=  mysqli_fetch_array($query_result);
if(mysqli_num_rows($query_result)>0) {
    $_SESSION["roll"]=$row['roll_no'];
    $_SESSION["sname"]=$row['student_name'];
    $_SESSION["mno"]=$row['student_no'];
    $_SESSION["mail"]=$row['student_email'];
    $_SESSION["year"]=$row['year'];
    $_SESSION["branch"]=$row['branch'];
    $_SESSION["section"]=$row['section'];
    $_SESSION["regno"]=$row['registration_no'];
$_SESSION["roomno"]=$row['room_no'];
$_SESSION["hname"]=$row['hostel_name'];
   
    }
	$query1="select * from outingDetails where roll_no = '$var' ";
$query1_result=  mysqli_query($con, $query1) or die("query is not executed" .mysqli_error($con));
$row1=  mysqli_fetch_array($query1_result);
if(mysqli_num_rows($query1_result)>0) {
    $_SESSION["vphno"]=$row['vphno'];
    $_SESSION["vname"]=$row['vname'];
    $_SESSION["relation"]=$row['relation'];
    $_SESSION["purpose"]=$row['purpose'];
    //$_SESSION["loc"]=$row['loc'];
    $_SESSION["exp_time"]=$row['exp_time'];
    $_SESSION["in_time"]=$row['in_time'];
    $_SESSION["out_time"]=$row['out_time'];
   
    }
    ?>

<style>
    * {
  box-sizing: border-box;
}


body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 0px;
  color:rgb(255,255,255);
}

.sidenav a {
  padding: 8px 8px 8px 15px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown {
  float: left;
  overflow: hidden;
 
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
a{
    background-color:black;
    color:white;
}
.collapsible {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 25px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color:black;
  color:white;
}

.sidenav1 {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav1 a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav1 a:hover {
  color: #f1f1f1;
}
.input [type=checkbox]{
    float:left;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 180px;
}
.card :hover{
    cursor: pointer;
}
iframe{
    width:800px;
    height: 800px;
    margin-top: 0vh;
    border-style: solid;
}
#print{
    width:100px;
    background-color: grey;
    color:white;
    height: 30px;
    margin-bottom: 0vh;
}
#accept{
    width: 100px;
    height: 50px;
    background-color: green;
    color:white;
}
#deny{  
    width: 100px;
    height: 50px;
    background-color: red;
    color:white;
}
</style>

<style>
    * {
  box-sizing: border-box;
}


body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  overflow-x: hidden;
  transition: 0s;
  padding-top: 0px;
  color:rgb(255,255,255);
   overflow-y: scroll;
}

.sidenav a {
  padding: 8px 8px 16px 20px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0s;
 
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left 0s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: none;
  color: white;
  padding: 8px 10px;
  background-color: blue;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: rgba(0,95,175,1);
 
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
  text-align: left;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
a{
    background-color:blue;
    color:white;
}
.collapsible {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 25px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0s ease-out;
  background-color:black;
  color:white;
 
}

.sidenav1 {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav1 a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav1 a:hover {
  color: #f1f1f1;
}
.input [type=checkbox]{
    float:left;
}
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
margin-top: 40px;
margin-left:0px;
 
 
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 180px;
  padding: 3px;
  padding-top: 25px;
  box-shadow: 3px 5px rgba(128,128,128,0.5);
}

.card :hover{
    cursor: pointer;
   
}
.card:active{
    box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.column:hover{
    cursor: pointer;
    box-shadow: 0px 8px 5px 5px rgba(128,128,128,0.5);
}
.column:active{
    box-shadow: 0px 0px 0px 0px rgba(128,128,128,0.5);
      box-shadow: 0 5px #666;
  transform: translateY(100px);
}
h3{
    color:white;
    align-content: center;
    vertical-align: middle;
    justify-content: center;
    text-align: center;
    font-size: 30px;
   
}
.sub{
    font-size: 15px;
}
.sidenav::-webkit-scrollbar {
    display: none;
}

.sidenav{
    -ms-overflow-style: none;
}
h3:active{
   
 
  transform: translateY(4px);
}
</style>
<script>sessionStorage.setItem("username","user name");
//alert(sessionStorage.getItem("username"));

</script>
</head>
<body style="padding-left:0px; padding-top: 0px; padding-right: 0px; margin-top: 0px; margin-left:0px;">
   
<div id="mySidenav" class="sidenav">
    <div id="userT" style=" height: 5vh;width:100%; margin-bottom: 3vh;background-color: blue; justify-content: center; height: 45px; padding-top: 1vh; padding-bottom: 10px;font-size: 25px;vertical-align: central; text-align: center;">CHIEF WARDEN</div>
    <a id='chk1' style="background-color:black; color:white;" href="ChiefWardenDashboard.php">Dashboard</a>
   
<button class="collapsible">Outing
    <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black;font-size: 16px; color:white;" href="OutingRecChiefWarden.php">Record of previous outings</a>
    <a id='chk5' style="background-color:black;font-size: 16px; color:white;" href="Outing.php">New Request</a>
   
</div>
 
<button class="collapsible">Visitors
    <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black;font-size: 16px; color:white;" href="VisitorsRecChiefWarden.php">Record of previous visitors</a>
  <a id='chk6' style="background-color:black;font-size: 16px; color:white;" href="Visitors.php">New Visitor</a>
 
</div>
 
  <button class="collapsible">Complaint
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black; font-size: 16px;color:white;" href="ComplaintRecChiefWarden.php">Record of previous complaints </a>
    <a id='chk7' style="background-color:black; font-size: 16px;color:white;" href="Complaint.php">Lodge Complaint</a>
</div>
<button class="collapsible">Registration
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
  <a id='chk20' style="background-color:black; font-size: 16px;color:white;" href="RegistrationRecChiefWarden.php">Record of previous registrations</a>
   <a id='chk21' style="background-color:black; font-size: 16px;color:white;" href="RegistrationStatus.php">View status</a>
    <a id='chk22' style="background-color:black; font-size: 16px;color:white;" href="RegForm1.php">New Registration</a>

</div>
 
<button class="collapsible" id='chk8'>View Rooms
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a id='chk9' style="background-color:black; font-size: 16px;color:white;" href="RoomsListChiefWarden.php">view rooms</a>
    <a id='chk10' style="background-color:black; font-size: 16px;color:white;" href="ViewRooms.php">view rooms</a>
</div>
 
<button id='chk11' class="collapsible">Information System
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black; font-size: 16px;color:white;" href="StudentInfoRecChiefWarden.php">Student Information</a>
    <a id='chk12' style="background-color:black; font-size: 16px;color:white;" href="StaffInfoRecChiefWarden.php">Staff Information</a>

</div>
   
   
<button id='chk13' class="collapsible">Hostel Maintainance
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
<a style="background-color:black; font-size: 16px;color:white;" href="TransactionRecChiefWarden.php">view requests</a>
<a id='chk14' style="background-color:black; font-size: 16px;color:white;" href="Transaction.php">new request</a>
</div>

 
<button class="collapsible">Attendance
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
  <a style="background-color:black; font-size: 16px;color:white;" href="StudentAttendanceChiefWarden.php"> view student attendance</a>
 

  <a id='chk15' style="background-color:black; font-size: 16px;color:white;" href="StaffAttendanceChiefWarden.php"> view staff attendance</a>
 
  <a id='chk16' style="background-color:black; font-size: 16px;color:white;" href="EnterStudentAttendance.php">Enter student attendance</a>
 

  <a id='chk17' style="background-color:black; font-size: 16px;color:white;" href="EnterStaffAttendance.php"> Enter staff attendance</a>
 
</div>
    <a id='chk18' style="background-color:black; color:white;" href="StudentInfo.php">View profile</a>
    <a id='chk19' style="background-color:black; color:white;" href="StaffInfo.php">View profile</a>

  <a style="background-color:black; color:white;" href="index.php">Home</a>
  <a style="background-color:black; color:white;" href="index.php">Log out</a>
</div>
 
    <div id="main" style=" height: 100%; padding-left: 0px; padding-top:0px; margin-top: 0px; margin-left:0px;margin-right: 0px; padding-right: 0px;">
    <div style="width:100%; height: 6vh; margin-left: 0px;background-color: blue;">
         <span style="font-size:30px;cursor:pointer" onclick="check();">&#9776; </span>
       
        <div class="dropdown" style="float:right; width: 160px;">
            <button class="dropbtn" id="user_name"  style="width:100%;"></button>
  <div class="dropdown-content">
    <a style="  font-size: 20px;color:white;"href="ProfileChiefWarden.php">View Profile</a>
    <a style="  font-size: 20px;color:white;"href="index.php">Logout</a>
   
  </div>
</div>

         <script>document.getElementById('user_name').innerHTML+=sessionStorage.getItem('username');</script>
       
    </div>
   
    <div style="text-align: center;width:80%; height: 80%; justify-content: center; margin-left:15%;">
        <div style="text-align:right; margin-top: 2vh; margin-right: 12vh; margin-bottom: 0vh;">
            <button id='print' style="cursor:pointer;">print</button>
        </div>
        <br>
       
        <iframe id="viewFrame" src="VisitorsFilledForm.php" id='myframe' title="Visitors form"></iframe>
        <br>
       
</div>
     
           
        </div>
       
       

   
    <script>
        $("#print").click(function(){
           $("#viewFrame").get(0).contentWindow.print();
        });
       function myFunction() {
       
    }
 
   window.onload= function(){
        var frame=document.getElementsByTagName("iframe")[0];
        var innerDoc = (frame.contentDocument)  ? frame.contentDocument  : frame.contentWindow.document;
        innerDoc.getElementById("roll_no").value='<?php echo $_SESSION["roll"]; ?>';
        innerDoc.getElementById("name").value='<?php echo $_SESSION["sname"]; ?>';
        innerDoc.getElementById("phone").value='<?php echo $_SESSION["mno"]; ?>';
        innerDoc.getElementById("email").value='<?php echo $_SESSION["mail"]; ?>';
        innerDoc.getElementById("year").value='<?php echo $_SESSION["branch"]; ?>';
        innerDoc.getElementById("section").value='<?php echo $_SESSION["section"]; ?>';
        innerDoc.getElementById("reg_no").value='<?php echo $_SESSION["regno"]; ?>';
        innerDoc.getElementById("hostel_name").value='<?php echo $_SESSION["hname"]; ?>';
        innerDoc.getElementById("room_no").value='<?php echo $_SESSION["roomno"]; ?>';
    }
/* if (sessionStorage.getItem("ChiefWardenPageView")==='Outing' ){
        innerDoc.getElementById("parent_name").value='<?php echo $_SESSION["vname"]; ?>';
        innerDoc.getElementById("relation").value='<?php echo $_SESSION["relation"]; ?>';
        innerDoc.getElementById("parent_phone").value='<?php echo $_SESSION["vphno"]; ?>';
        innerDoc.getElementById("purpose").value='<?php echo $_SESSION["purpose"]; ?>';
        //innerDoc.getElementById("local_nonlocal").value='<?php echo $_SESSION["loc"]; ?>';
        innerDoc.getElementById("expected_time").value='<?php echo $_SESSION["exp_time"]; ?>';
        innerDoc.getElementById("in_time").value='<?php echo $_SESSION["in_time"]; ?>';
        innerDoc.getElementById("out_time").value='<?php echo $_SESSION["out_time"]; ?>';
 }

       
 /*var x = document.getElementById("myframe");
var y = x.contentDocument;
y.body.style.backgroundColor = "red";
*/

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
    </script>
<script>
    var flag=0;
    function check(){
        if (flag === 0){
            openNav();
        }else{
             closeNav();
        }
       
    }
    openNav();
function openNav() {
    flag=1;
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    flag=0;
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
if (sessionStorage.getItem("ChiefWardenPageView")==="Outing")
document.getElementById('viewFrame').src="OutingFilledForm.php";
else if (sessionStorage.getItem("ChiefWardenPageView")==="Visitor")
document.getElementById('viewFrame').src="VisitorsFilledForm.php";
else if (sessionStorage.getItem("ChiefWardenPageView")==="Complaint")
document.getElementById('viewFrame').src="ComplaintFilledForm.php";
else if (sessionStorage.getItem("ChiefWardenPageView")==="Transaction")
document.getElementById('viewFrame').src="TransactionFilledForm.php";
else if (sessionStorage.getItem("ChiefWardenPageView")==="Registration")
document.getElementById('viewFrame').src="RegistrationFilledForm.php";




</script>
<script>
   
     
     
   // var ele=document.getElementsByClassName("but");
   
myFunction();
</script>
<script>
   
     
     
   if (sessionStorage.getItem('userType')==="CHIEF WARDEN"){
          document.getElementById('chk5').style.display='none';
           document.getElementById('chk6').style.display='none';
            document.getElementById('chk7').style.display='none';
             document.getElementById('chk10').style.display='none';
              document.getElementById('chk14').style.display='none';
               document.getElementById('chk16').style.display='none';
                document.getElementById('chk17').style.display='none';
    document.getElementById('chk18').style.display='none';
    document.getElementById('chk21').style.display='none';
     document.getElementById('chk22').style.display='none';
   }else if (sessionStorage.getItem('userType')==="WARDEN"){
          document.getElementById('chk5').style.display='none';
           document.getElementById('chk6').style.display='none';
            document.getElementById('chk7').style.display='none';
             document.getElementById('chk9').style.display='none';
             // document.getElementById('chk14').style.display='none';
               document.getElementById('chk16').style.display='none';
                document.getElementById('chk17').style.display='none';
    document.getElementById('chk18').style.display='none';
    document.getElementById('chk21').style.display='none';
     document.getElementById('chk22').style.display='none';
   }else if (sessionStorage.getItem('userType')==="CARETAKER"){
          document.getElementById('chk5').style.display='none';
          // document.getElementById('chk6').style.display='none';
            document.getElementById('chk7').style.display='none';
             document.getElementById('chk9').style.display='none';
             document.getElementById('chk12').style.display='none';
              document.getElementById('chk13').style.display='none';
             //  document.getElementById('chk16').style.display='none';
              //  document.getElementById('chk17').style.display='none';
    document.getElementById('chk18').style.display='none';
    document.getElementById('chk21').style.display='none';
     document.getElementById('chk22').style.display='none';
   } else{  
          //document.getElementById('chk5').style.display='none';
           document.getElementById('chk6').style.display='none';
          //  document.getElementById('chk7').style.display='none';
             document.getElementById('chk8').style.display='none';
             document.getElementById('chk11').style.display='none';
              document.getElementById('chk13').style.display='none';
         document.getElementById('chk15').style.display='none';
                   
        document.getElementById('chk16').style.display='none';
                document.getElementById('chk17').style.display='none';
    document.getElementById('chk19').style.display='none';
    document.getElementById('chk20').style.display='none';
     //document.getElementById('chk22').style.display='none';
   }
   document.getElementById('userT').innerHTML=sessionStorage.getItem('userType');
</script>


</body>
</html>
