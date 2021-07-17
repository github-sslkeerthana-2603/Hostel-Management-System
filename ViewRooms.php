<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
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
  font-size: 15px;
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
    <div style="width:100%; height: 80%;">
       
    </div>
        <h1 style="text-align: center; margin-top: 5vh; font-size: 50px;" id="block_name"></h1>
        <div style=" text-align: center;vertical-align: middle;width:90%; margin-left: 5%;  margin-top: 0px; border-style: solid; background-color: grey;">
           <div id="g">
            
        </div>
           
        </div>
       <button onclick="location.href='roomSuccess.php'" style="cursor: pointer; background-color: rgba(0,95,175,0.7); margin-top:20px; width: 10%; height: 10%; color:white; font-weight: bold; padding: 8px; margin-right:20px; float:right;">SUBMIT</button>
        
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
   var e=document.getElementById("g");
   for (var i=0;i<102;i++){
       
   var s=(i%34)+1;
   if (Math.floor(i/34)===0){
   var q='G';
   }else if (Math.floor(i/34)===1){
       var q='F';
   }else{
       var q='S';
   }
           e.innerHTML+="<button class='but' id='"+q+s+"'>"+q+s+"</button>";
           if (i===16||i===33||i===50||i===67||i===84){
               e.innerHTML+="<br>";
           }
           if (i===33 || i===67){
               e.innerHTML+="<hr>";
           }
       }
      var ele= document.getElementsByClassName('but');
  var flag=new Array(ele.length);
    for (var i=0;i<ele.length;i++){
        
        flag[i]=true;
var q;
if (Math.floor(i/34)===0){
    q='G';
}else if (Math.floor(i/34)===1){
    q='F';
}else{
    q='S';
}
var s=(i%34)+1;
var str='#'+q+s;
var selectedRoom=-1;
       $(str).click(function(){
            var a;
            for (var j=0;j<ele.length;j++){
          var q1;
          if (Math.floor(j/34)===0){
              q1='G';
          }else if (Math.floor(j/34)===1){
              q1='F';
          }else{
              q1='S';
          }
          var s1=(j%34)+1;
          var s11=q1+s1;
          
            if (this===document.getElementById(s11)){
                var q11;
                var s111;
                var se1;
               if (selectedRoom!==-1){
                   if (Math.floor(selectedRoom/34)===0){
                       q11='G';
                   }else if (Math.floor(selectedRoom/34)===1){
                       q11='F';
                   }else{
                       q11='S';
                   }
                   s111=(selectedRoom%34)+1;
                   se1=""+q11+s111;
                   flag[selectedRoom]=true;
                 document.getElementById(se1).style.background="white";
               document.getElementById(se1).style.color="black";
                
                
                
                }
                
                if (selectedRoom===j){
                   // alert('hi');
                    flag[a]=false;
                   a=-1;
                    selectedRoom=-1;
                }else{
                selectedRoom=j;
                a=j;
				$(document).ready(function(){
		createCookie("var",selectedRoom,"10");
	});
function createCookie(name, value, days) { 
	var expires; 
	
	if (days) { 
		var date = new Date(); 
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
		expires = "; expires=" + date.toGMTString(); 
	} 
	else { 
		expires = ""; 
	} 
	
	document.cookie = escape(name) + "=" + 
		escape(value) + expires + "; path=/"; 
} 

            }
                
               /* if (document.getElementById(se1).style.background==='green'){
                     document.getElementById(se1).style.background="white";
               document.getElementById(se1).style.color="black";
                
                }*/
               }
        }
            //alert(flag[a]);
            if ( a!==-1 && flag[a]===true){
               // alert('hey');
        flag[a]=false;  
        $(this).css("background-color","green");
        $(this).css("color","white");
       }else{
           flag[a]=true;
           $(this).css("background-color","white");
           $(this).css("color","black");
       }
       
       });
    }
    function checkStatus(i,ap){
         
	//alert(i);
		var q_1,s_1,s_11,s_111;
	if (Math.floor(i/34)===0){
		q_1='G';
	}else if (Math.floor(i/34)===1){
		q_1='F';
	}else{
		q_1='S';
	}
	s_1=(i%34)+1;
	s_11=q_1+s_1;
	s_111="#"+s_11;
        if (ap==="full"){
	$(s_111).css("background-color","red");
	$(s_111).css("color","white");
    }else if (ap==="partially"){
        
	$(s_111).css("background-color","orange");
	$(s_111).css("color","white");
    }
        
	}
   
   
      
     
   document.getElementById('block_name').innerHTML='block name'
</script>
<script>
    
      
      
   

</script>
<?php
$user=$_SESSION["userType"];
echo $user;
if($user=="CHIEFWARDEN"){
$block=$_GET['hos'];
}
else if($user=="STUDENT"){
	$block="3rd year hostel";
}
else if($user=="WARDEN"){
	$block="Bhima";
}
else {
	$block="3rd year hostel";
}
$_SESSION["block"]=$block;
echo $block;
$con=mysqli_connect("localhost","root","","hostel_registration") or die(mysqli_error($con));
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
$query_result=mysqli_query($con, $query) or die(mysqli_error($con));
$num=mysqli_num_rows($query_result);
echo "<script> var i=-2;</script>";
while($num>0){
$row = mysqli_fetch_array($query_result);
$app = $row['status'];
echo"<script> var ap='$app';  checkStatus(i,ap); i++;</script>";
$num--;
}
?>
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
