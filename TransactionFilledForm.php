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
  padding: 0 10px;
margin-top: 40px;
  
  
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
}
.card :hover{
    cursor: pointer;
}
.column:hover{
    cursor: pointer;
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
</style>
</head>
<body style="padding-left:0px; padding-top: 0px; padding-right: 0px; margin-top: 0px; margin-left:0px;">
    

    <div style="text-align: center;width:100%; height: 100%;  justify-content: center; margin-left:5%;">
      

  
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  float: left;
  margin-left: 6vw;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  width: 90%;
}

input[type=submit]:hover {
  background-color: #45a049;
  
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 10%;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.col-2{
    
  float: left;
  width: 2%;
  margin-top: 2%;
}
.col-10{
  float: left;
  width: 10%;
  margin-top: 6px;
  }
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .col-25 label{
      margin-left: 0vw;
  }
  .col-2{
      width:20%;
  }
  
  .col-2{
      width:30%;
  }
}

@media screen and (max-width: 900px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 900px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.sticky{
  position: fixed;
   top: 0;
  width: 100%;
  z-index: 0;
  transition: 0.4ms;
}
.topnav{


  width: 100%;
  z-index: 2;
    overflow: hidden;
  background-color: white;
  transition: 0.4ms;
 
  
}
.topnav a {
    
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1% 1%;
  text-decoration: none;
  font-size: 2.3vh;
}
.topnav a:hover {
  background-color: rgba(95,95,255,0.3);
  color: black;
}
.topnav a.active {
  background-color: rgba(0,0,255,0.5);
  color: white;
}

 .topnav .icon {
  display: none;
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
</style>
</head>

  
         </div>
        <script>
window.onscroll = function() {myFunction1();};

var navbar = document.getElementById("topBar1");
var sticky = navbar.offsetTop;

function myFunction1() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
function myFunction() {
  var x = document.getElementById("topBar1");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

        </script>

      
<div class="container" style="width:100%; background-color: white; margin-left: 0%;justify-content: center; text-align: center;">
    <h2>TRANSACTION REQUEST</h2>

    <form style="margin-right:6vw;">
    <div class="row">
      <div class="col-25">
        <label for="app_no">Application No:</label>
      </div>
      <div class="col-25">
        <input type="text" id="app_no" name="app_no" placeholder="Enter application no">
      </div>
      <div class="col-25">
        <label for="date">Date:</label>
      </div>
      <div class="col-25">
        <input type="text" id="date" name="date" placeholder="Enter date">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="reg_no">Employee ID:</label>
      </div>
      <div class="col-25">
           <input type="text" id="reg_no" name="reg_no" placeholder="Enter registration no">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="name">Name:</label>
      </div>
      <div class="col-75">
           <input type="text" id="name" name="name" placeholder="Enter name">
      </div>
    </div>
     
      <div class="row">
      <div class="col-25">
        <label for="phone">Phone No:</label>
      </div>
      <div class="col-75">
           <input type="text" id="phone" name="phone" placeholder="Enter phone no">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="email">Email ID:</label>
      </div>
      <div class="col-75">
           <input type="text" id="email" name="email" placeholder="Enter email ID">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="hostel_name">Hostel Name:</label>
      </div>
      <div class="col-75">
           <input type="text" id="hostel_name" name="hostel_name" placeholder="Enter hostel name">
      </div>
    </div>
        
      
      <div class="row">
      <div class="col-25">
        <label for="parent_name">Merchant/shop:</label>
      </div>
      <div class="col-75">
           <input type="text" id="parent_name" name="visitor_name" placeholder="Enter parent's name">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="relation">amount:</label>
      </div>
      <div class="col-75">
           <input type="text" id="relation" name="relation" placeholder="Enter relation">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="parent_phone">Mode of payment:</label>
      </div>
      <div class="col-75">
          <input type="text" id='bill' style="width:100%; height:30px;"/>
      </div>
    </div>
      
      
      <div class="row">
      <div class="col-25">
        <label for="purpose">Upload bill:</label>
      </div>
      <div class="col-75">
          <input type="text" id='bill' style="width:100%; height:30px;"/>
      </div>
    </div>
        
  </form>
</div>


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
