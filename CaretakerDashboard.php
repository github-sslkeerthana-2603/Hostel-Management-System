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
   overflow-y: scroll;
}

.sidenav a {
  padding: 8px 8px 16px 12px;
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
  background-color: blue;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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
</head>
<body style="padding-left:0px; padding-top: 0px; padding-right: 0px; margin-top: 0px; margin-left:0px;">
    
<div id="mySidenav" class="sidenav">
    <div style=" height: 5vh;width:100%; margin-bottom: 3vh;background-color: blue; justify-content: center; height: 45px; padding-top: 1vh; padding-bottom: 10px;font-size: 30px;vertical-align: central; text-align: center;">CARETAKER</div> 
    <a style="background-color:black; color:white;" href="CaretakerDashboard.php">Dashboard</a>
  
  
<button class="collapsible">Outing
    <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black;font-size: 16px; color:white;" href="OutingRecCareTaker.php">Record of previous outings</a>
  
</div>
  
<button class="collapsible">Visitors 
    <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black;font-size: 16px; color:white;" href="VisitorsRecCareTaker.php">Record of previous visitors</a>
    <a style="background-color:black;font-size: 16px; color:white;" href="Visitor.php">New Visitor</a>
</div>
  
  <button class="collapsible">Complaint
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black; font-size: 16px;color:white;" href="ComplaintsRecCareTaker.php">Record of previous complaints </a>

</div>
<button class="collapsible">Registration
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
  <a style="background-color:black; font-size: 16px;color:white;" href="#">Record of previous registrations</a>
  

</div>
  
<button class="collapsible">View Rooms
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
  <a style="background-color:black; font-size: 16px;color:white;" href="#">girls hostels</a>
  <a style="background-color:black; font-size: 16px;color:white;" href="#">boys hostels</a> 

</div>
  
<button class="collapsible">Information System
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
    <a style="background-color:black; font-size: 16px;color:white;" href="StudentInfoRecCareTaker.php">Student Information</a>
  

</div>

<button class="collapsible">Attendance
  <i class="fa fa-caret-down"></i>
</button>
<div class="content">
  <a style="background-color:black; font-size: 16px;color:white;" href="#"> view student attendance</a>
  <a style="background-color:black; font-size: 16px;color:white;" href="#">Enter student attendance</a>

  <a style="background-color:black; font-size: 16px;color:white;" href="#"> view staff attendance</a>
  <a style="background-color:black; font-size: 16px;color:white;" href="#">Enter staff attendance</a>
</div>
  <a style="background-color:black; color:white;" href="#">Home</a>
  <a style="background-color:black; color:white;" href="#">Log out</a>
</div>

    <div id="main" style=" height: 100%; padding-left: 0px; padding-top:0px; margin-top: 0px; margin-left:0px;margin-right: 0px; padding-right: 0px;">
    <div style="width:100%; height: 6vh; margin-left: 0px;background-color: blue;">
         <span style="font-size:30px;cursor:pointer" onclick="check();">&#9776; </span>
       
        <div class="dropdown" style="float:right;">
  <button class="dropbtn">User name</button>
  <div class="dropdown-content">
    <a href="#">View Profile</a>
    <a href="#">Logout</a>
    
  </div>
</div>


       
    </div>
    <div style="text-align: center;width:80%; height: 80%; justify-content: center; margin-left:5%;">
      
        <div class="row">
  <div class="column">
      <div class="card" onclick="location.href='OutingRecCareTaker.php'"style="background-image:url('blu.jpg'); background-size: cover; background-repeat: no-repeat; ">
      <h3>OUTING PORTAL</h3>
    </div>
  </div>

  <div class="column"  >
      <div class="card" onclick="location.href='VisitorsRecCareTaker.php'"style="background-image: url('green.jpg'); background-size: cover; background-repeat: no-repeat; ">
      <h3>VISITOR'S PORTAL</h3>
    </div>
  </div>
  
  <div class="column">
      <div class="card" onclick="location.href='ComplaintsRecCareTaker.php'"style="background-image: url('orange.jpg'); background-size: cover; background-repeat: no-repeat; " >
      <h3>COMPLAINT PORTAL</h3>
     
    </div>
  </div>
  
  <div class="column">
      <div class="card" style="background-image: url('pink.jpg'); background-size: cover; background-repeat: no-repeat; ">
      <h3>REGISTRATION PORTAL</h3>
    </div>
  </div>
            
  <div class="column">
      <div class="card" style="background-image: url('red.jpg'); background-size: cover; background-repeat: no-repeat; " >
      <h3>VIEW ROOMS</h3>
    </div>
  </div>         
  
            
  <div class="column">
      <div class="card" onclick="location.href='StudentInfoRecCaretaker.php'" style="background-image: url('brown.jpg'); background-size: cover; background-repeat: no-repeat; " >
      <h3>INFORMATION SYSTEM</h3>
    </div>
  </div>
            
  <div class="column">
      <div class="card" style="background-image: url('dark_green.jpg'); background-size: cover; background-repeat: no-repeat; " >
      <h3>ATTENDANCE</h3>
    </div>
  </div>
</div>

        
        
        <script>
            $(".card").click(function(){
   //location.href='Visitors.php';
});
          
        
        </script> 
        
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

</body>
</html> 
