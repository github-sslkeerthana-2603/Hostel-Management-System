<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
  margin-right: 20px;
}


.modal {
  display: none; 
  position: fixed; 

  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;
 
  padding-top: 60px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
img.avatar { 
        width: 40%; 
        border-radius: 50%; 
        border-style: solid;
        border-width: 1px;
} 
</style>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
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

  transition: 0.4ms;
}
.topnav{


  width: 100%;
  
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



</style>
</head>
<body onload="document.getElementById('id01').style.display='block'" style="background-color:rgba(128,128,128,0.2);">

<div  class="topnav" id="topBar1" id="myTopnav" style="background-color:rgba(0,95,255,1); ">

               <a href="index.php" class="active">Home</a>
        <a href="CheckRegistration.php" >Registration</a>
         <a href="CheckOuting.php">Outing</a>
        <a href='CheckVisitors.php'>Visitors</a>
        <a href="CheckComplaint.php">Complaints</a>
        <a href="FeesAndBillsPayments.php">Maintainance</a>
        <a href="InformationSystemStudents.php">Information System</a>
          <a href="Login Navigation.php">Login</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
  </a>
          </div>
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

        <div id="id01" class="modal" style="margin-top: 5vh; height: 100vh; ">
  
    <form class="modal-content" method="post" action="StudentSuccess.php" style="background-color:rgba(255,255,255,1); height: 100%; border-style: solid; max-width: 500px; heightmargin:auto;  text-align: center; vertical-align:middle; margin-top: 0vh; background-color: white;background-color:rgba(255,255,255,0.9);">
    

    <div class="container">
       <img src="avatar.jpg" alt="Avatar" class="avatar">
   <h2 style="font-size:5vh;">STUDENT LOGIN PORTAL</h2>
    
        <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
    
<button type="submit" class="btn">Login</button>
      <label style="float:left; text-align: left; width: 100%;">
          <input type="checkbox" checked="checked" name="remember" style="float:left;"> Remember me
      </label>
    

<div class="container" style="width:100%; float: left;">
      <button type="button" style="float:left;" onclick="document.getElementById('id01').style.display='none';location.href='LoginNavigation.php'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
<button type="submit" style="display: none;" class="btn" onclick="location.href='StudentDashboard.php'">Login</button>
  </div>
    </form>
</div>


</body>
</html>
