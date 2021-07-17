<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
  padding: 8px 8px 8px 32px;
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
  font-size: 16px;  
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
  background-color: #ddd;
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
  margin-left: 10px;
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
.square {
  background-color: #555;
  border-style: solid;
}
.but{
    background-color: white;
    margin-right: 12px;
    margin-top:12px;
    width:50px;
    margin-bottom: 10px;
}

h2{
    font-size: 35px;
    color: rgba(0,95,175,1);
}
.lab{
    margin-left: 1vw;
}
.radio{
    vertical-align: middle;
}
.input-wrapper {
        display:inline-block;
        position: relative
    }
    .input-wrapper:after {
        font-family: 'FontAwesome';
        content: '\f274';
        position: absolute;
        right: 6px;
    }
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
  .input-icons i { 
            position: absolute; 
        } 
          
        .input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
        .icon { 
            padding: 10px; 
            min-width: 40px; 
        } 
          
        .input-field { 
            width: 100%; 
            padding: 10px; 
 
        } 
        

.sidenav1 {
  height: 100%;
  width: 200px;
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
.sidenav::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
.sidenav {
    -ms-overflow-style: none;
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
  padding: 8px 8px 16px 30px;
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

tr{
    cursor: pointer;
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
            <button class="dropbtn" id="user_name" ></button>
  <div class="dropdown-content">
    <a style="  font-size: 20px;color:white;"href="ProfileChiefWarden.php">View Profile</a>
    <a style="  font-size: 20px;color:white;"href="index.php">Logout</a>
    
  </div>
</div>

         <script>document.getElementById('user_name').innerHTML+=sessionStorage.getItem('username');</script>
       
    </div>
    <div style="text-align: center;width:80%; height: 80%; justify-content: center; margin-left:5%;">
       <h2>STUDENT INFORMATION</h2>
       <div class="input-icons">
<i class="fa fa-search icon" aria-hidden="true"></i>          
<input type="text" class="input-field" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

       </div>

<table id="myTable">
  <tr class="header">
    <th style="width:12%;">Roll no</th>
    <th style="width:12%;">Registration no</th>
    <th style="width:12%;">Name</th>
    <th style="width:12%;">Year</th>
    <th style="width:12%;">Branch</th>
    <th style="width:12%;">Section</th>
    <th style="width:12%;">Hostel Name</th>
    <th style="width:12%;">Room No</th>
  </tr>
  <div id="table_rows"></div>
  
</table>
      

    
         <div class="sidenav1" style="float:right;margin-left: 87%; width: 200px; text-align: left; padding-top: 0px;">
             <div style="width:100%; height: 6vh; background-color: blue;">
                 
        <div class="dropdown" style="float:right; width: 160px;">
            <button class="dropbtn" id="user_name1" style="width:100%;" ></button>
            <div class="dropdown-content" >
                <a style="  font-size: 20px;color:white;"href="ProfileChiefWarden.php">View Profile</a>
    <a  style="  font-size: 20px;color:white;"href="index.php">Logout</a>
    
  </div>
</div>

         <script>document.getElementById('user_name1').innerHTML+=sessionStorage.getItem('username');
        </script>
       
             </div>
             
             <label style="font-weight:bold; color:white; font-size: 25px;">select filters</label>
             <br>
             <br>
    
        
<input type="checkbox" id="roll_no" name="roll_no" value="roll_no" onclick="myFunction1();">
<label style="color:white;"for="roll_no"> roll no</label><br>
<input type="checkbox" id="reg_no" name="reg_no" value="reg_no">
<label  style="color:white;" for="reg_no"> registration no</label><br>
<input type="checkbox" id="stu_name" name="stu_name" value="stu_name">
<label  style="color:white;" for="stu_name"> name</label><br>
<input type="checkbox" id="year" name="year" value="room_no">
<label  style="color:white;" for="year">Year</label><br>
<input type="checkbox" id="branch" name="branch" value="branch">
<label  style="color:white;" for="branch"> Branch</label><br>
<input type="checkbox" id="section" name="section" value="section">
<label  style="color:white;" for="section">Section</label><br>
<input type="checkbox" id="hostel_name" name="hostel_name" value="hostel_name">
<label  style="color:white;" for="hostel_name"> Hostel Name</label><br>
<input type="checkbox" id="room_no" name="room_no" value="room_no">
<label  style="color:white;" for="room_no"> room no</label><br>

</div>
</div>
<?php
$con=mysqli_connect("localhost","root","","hostel_registration") or die(mysqli_error($con));
$query="select * from student_info";
$query_result=mysqli_query($con, $query) or die( mysqli_error($con));
$num=mysqli_num_rows($query_result);
$count=0;
while($num>0){
$row = mysqli_fetch_array($query_result);
$reg = $row['registration_no'];
$arr1[$count]=$reg;
$roll = $row['roll_no'];
$arr2[$count]=$roll;
$name = $row['student_name'];
$arr3[$count]=$name;
$year = $row['year'];
$arr4[$count]=$year;
$branch = $row['branch'];
$arr5[$count]=$branch;
$sec = $row['section'];
$arr6[$count]=$sec;
$hname = $row['hostel_name'];
$arr7[$count]=$hname;
$room = $row['room_no'];
$arr8[$count]=$room;
$num--;
$count++;
}
?>
<script>
var reg = <?php echo json_encode($arr1); ?>;
var roll = <?php echo json_encode($arr2); ?>;
var name1 = <?php echo json_encode($arr3); ?>;
var year = <?php echo json_encode($arr4); ?>;
var branch = <?php echo json_encode($arr5); ?>;
var sec = <?php echo json_encode($arr6); ?>;
var hostel_name = <?php echo json_encode($arr7); ?>;
var room_no = <?php echo json_encode($arr8); ?>;
for (var i=0;i<reg.length;i++){
    document.getElementById('myTable').innerHTML+="<tr><td>"+roll[i]+"</td><td id='getReg"+i+"'>"+reg[i]+"</td><td>"+name1[i]+"</td>\n\
<td>"+year[i]+"</td><td>"+branch[i]+"</td><td>"+sec[i]+"</td><td>"+hostel_name[i]+"</td><td>"+room_no[i]+"</td></tr><br>";
}

function myFunction() {
var input, filter, table, tr, td1,td2,td3,td4,td5,td6,td7,td8, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6, txtValue7, txtValue8;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
var td1,td2,td3,td4,td5,td6,td7,td8;
for (i = 0; i < tr.length; i++) {
  if (document.getElementById('roll_no').checked===true){
td1 = tr[i].getElementsByTagName("td")[0];
    if (td1){
      txtValue1 = td1.textContent || td1.innerText;
        }
      }
      if (document.getElementById('reg_no').checked===true){
    td2 = tr[i].getElementsByTagName("td")[1];
    
       if (td2){
           txtValue2 = td2.textContent || td2.innerText;
       }
      }
      
      if (document.getElementById('stu_name').checked===true){
    td3 = tr[i].getElementsByTagName("td")[2];
    
       if (td3){
           txtValue3 = td3.textContent || td3.innerText;
       }
      }
      
      if (document.getElementById('year').checked===true){
    td4 = tr[i].getElementsByTagName("td")[3];
    
       if (td4){
           txtValue4 = td4.textContent || td4.innerText;
       }
      }
      
      if (document.getElementById('branch').checked===true){
    td5 = tr[i].getElementsByTagName("td")[4];
    
       if (td5){
           txtValue5 = td5.textContent || td5.innerText;
       }
      }
      
      if (document.getElementById('section').checked===true){
    td6 = tr[i].getElementsByTagName("td")[5];
    
       if (td6){
           txtValue6 = td6.textContent || td6.innerText;
       }
      }
      
      if (document.getElementById('hostel_name').checked===true){
    td7 = tr[i].getElementsByTagName("td")[6];
    
       if (td7){
           txtValue7 = td7.textContent || td7.innerText;
       }
      }
      
      if (document.getElementById('room_no').checked===true){
    td8 = tr[i].getElementsByTagName("td")[7];
    
       if (td8){
           txtValue8 = td8.textContent || td8.innerText;
       }
      }
      
      if (!td1 && !td2 && !td3 && !td4 && !td5 && !td6 && !td7 && !td8 ){
td1 = tr[i].getElementsByTagName("td")[0];
    if (td1){
      txtValue1 = td1.textContent || td1.innerText;    
    }
  td2 = tr[i].getElementsByTagName("td")[1];
    if (td2){
      txtValue2 = td2.textContent || td2.innerText;
  } 
      td3 = tr[i].getElementsByTagName("td")[2];
    if (td3){
      txtValue3 = td3.textContent || td3.innerText;
    }   
      td4 = tr[i].getElementsByTagName("td")[3];
    if (td4){
      txtValue4 = td4.textContent || td4.innerText;
  } 
      td5 = tr[i].getElementsByTagName("td")[4];
    if (td5){
      txtValue5 = td5.textContent || td5.innerText;
  }
      td6 = tr[i].getElementsByTagName("td")[5];
    if (td6){
      txtValue6 = td6.textContent || td6.innerText;
  }
      td7 = tr[i].getElementsByTagName("td")[6];
    if (td7){
      txtValue7 = td7.textContent || td7.innerText;
  }
      td8 = tr[i].getElementsByTagName("td")[7];
    if (td8){
      txtValue8 = td8.textContent || td8.innerText;
  }
  
         if (td1 ||td2 || td3 || td4 || td5 || td6 || td7 || td8) {
        
      if ((td1 && txtValue1.toUpperCase().indexOf(filter) > -1) ||(td2 && txtValue2.toUpperCase().indexOf(filter) > -1)
              ||(td3 && txtValue3.toUpperCase().indexOf(filter) > -1) || (td4 && txtValue4.toUpperCase().indexOf(filter) > -1)
              ||(td5 && txtValue5.toUpperCase().indexOf(filter) > -1) || (td6 && txtValue6.toUpperCase().indexOf(filter) > -1)
              ||(td7 && txtValue7.toUpperCase().indexOf(filter) > -1) || (td8 && txtValue8.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    td1=undefined;
    td2=undefined;
    td3=undefined;
    td4=undefined;
    td5=undefined;
    td6=undefined;
    td7=undefined;
    td8=undefined;
                }
      
    if (td1 ||td2 || td3 || td4 || td5 || td6 || td7 || td8) {
        
      if ((td1 && txtValue1.toUpperCase().indexOf(filter) > -1) ||(td2 && txtValue2.toUpperCase().indexOf(filter) > -1)
              ||(td3 && txtValue3.toUpperCase().indexOf(filter) > -1) || (td4 && txtValue4.toUpperCase().indexOf(filter) > -1)
              ||(td5 && txtValue5.toUpperCase().indexOf(filter) > -1) || (td6 && txtValue6.toUpperCase().indexOf(filter) > -1)
              ||(td7 && txtValue7.toUpperCase().indexOf(filter) > -1) || (td8 && txtValue8.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
$("input[type=checkbox]").change(function() {  
     myFunction();
    });
    
    
    
    
    
    function addRowHandlers() {
    var table = document.getElementById("myTable");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler =  function(row) 
            {
                return function() { 
                                       /* var cell = row.getElementsByTagName("td")[0];
                                        var id = cell.innerHTML;
                                        alert("id:" + id);*/
                                        location.href='StudentInfo.php';
                                 };
            };

        currentRow.onclick = createClickHandler(currentRow);
    }
}
window.onload = addRowHandlers();
</script>
        <div>
            
        </div>
        
     
           
        </div>
       
        

    
    <script>
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

</script>
<script>
    
      
      
   // var ele=document.getElementsByClassName("but");
    

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
