<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
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
  
  padding: 20px;
 
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
<body style="text-align:center;justify-content: center;">
     
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



<div class="container" style="width:100%; justify-content: center;">
    <h2>OUTING FORM</h2>

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
        <label for="reg_no">Registration No:</label>
      </div>
      <div class="col-25">
           <input type="text" id="reg_no" name="reg_no" placeholder="Enter registration no">
      </div>
      <div class="col-25">
        <label for="roll_no">Roll No:</label>
      </div>
      <div class="col-25">
           <input type="text" id="roll_no" name="roll_no" placeholder="Enter roll no">
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
        <label for="year">Year:</label>
      </div>
      <div class="col-25">
           <input type="text" id="year" name="year" placeholder="Enter year">
      </div>
      <div class="col-25">
        <label for="section">Section:</label>
      </div>
      <div class="col-25">
           <input type="text" id="section" name="section" placeholder="Enter section">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="branch">Branch:</label>
      </div>
      <div class="col-75">
           <input type="text" id="branch" name="branch" placeholder="Enter branch">
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
        <label for="room_no">Room No:</label>
      </div>
      <div class="col-75">
           <input type="text" id="room_no" name="room_no" placeholder="Enter room no">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="parent_name">Parent's Name:</label>
      </div>
      <div class="col-75">
           <input type="text" id="parent_name" name="visitor_name" placeholder="Enter parent's name">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="relation">Relation:</label>
      </div>
      <div class="col-75">
           <input type="text" id="relation" name="relation" placeholder="Enter relation">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="parent_phone">Parent's No:</label>
      </div>
      <div class="col-75">
           <input type="text" id="parent_phone" name="parent_phone" placeholder="Enter parent's phone no">
      </div>
    </div>
      
      
      <div class="row">
      <div class="col-25">
        <label for="purpose">Purpose:</label>
      </div>
      <div class="col-75">
             <textarea id="purpose" name="purpose" placeholder="Write purpose" style="height:12vh;"></textarea>
      </div>
    </div>
        <div class="row">
      
      <div class="col-25">
        <label for="outing">Local/Non local:</label>
      </div>
      <div class="col-2" style="vertical-align:middle; margin-top: 2vh;">
           <input type="radio" id="visitor_phone" name="visitor_phone" placeholder="Enter visitor's phone no">
      </div>
      
      <div class="col-10">
          <label class="lab">Local</label>
      </div>
      
      <div class="col-2" style="vertical-align:middle; margin-top: 2vh;">
           <input type="radio" id="visitor_phone" name="visitor_phone" placeholder="Enter visitor's phone no">
      </div>
      
      <div class="col-10">
          <label class="lab">Non-local</label>
      </div>
      <div class="col-25">
        <label for="expected_time">Expected time:</label>
      </div>
      <div class="col-25">
           <input type="text" id="expected_time" name="expected_time" placeholder="Enter expected time">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="out_time">Out-time:</label>
      </div>
      <div class="col-25">
           <input type="text" id="out_time" name="out_time" placeholder="Enter out time">
      </div>
      <div class="col-25">
        <label for="in_time">In-time:</label>
      </div>
      <div class="col-25">
           <input type="text" id="in_time" name="in_time" placeholder="Enter in time">
      </div>
    </div>
 
  </form>
</div>

</body>
</html>
