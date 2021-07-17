<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
       </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
           
        @media (min-width:320px){
            .container{
                width:320px;
            }
        }
        
        @media (min-width:481px){
            .container{
                width:481px;
            }
        }
        
        @media (min-width:641px){
            .container{
                width:641px;
            }
        }
        
        @media (min-width:961px){
            .container{
                width:961px;
            }
        }
        
        @media (min-width:1000px){
            .container{
                width:1000px;
            }
        }
        .mySlides {display: none;}
img {
    vertical-align: top;
}
.centered {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 3vw;
}

.slideshow-container {
 
  position: relative;
  margin: auto;
  }


.dot {
  height:0.2%;
  width: 0.2%;
  margin: 0px 2px;
  background-color: #bbb;
    border-radius: 1vh;
   
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
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
 .mySlides {display: none;}
img {vertical-align: middle;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 3vw;
}

.slideshow-container {
 
  position: relative;
  margin: auto;
  }


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
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
* {
  box-sizing: border-box;
}
.column {
  float: left;

  padding: 0 10px;
   flex: 0 0 25%;
  display: flex;
  margin-right: 3vw;
       
}

.row {margin: 0 -5px;
 display:flex; 
  flex-flow: row wrap;
width: 100%;
text-align: center;
justify-content: center;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
  flex:0 0 100%;
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
  flex: 0 0 100%;

  
}

.marquee {
  margin: 0 auto;
  white-space: nowrap;
  overflow: hidden;
  position: absolute;
  direction: up;
}

.marquee span {
  display: inline-block;
  padding-left: 100%;
  animation: marquee 5s linear infinite;
}

.marquee2 span {
  animation-delay: 2.5s;
}
.con{
    display: flex;
}
@keyframes marquee {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(-100%, 0);
  }
}

.fade-out {
  animation: fadeOut ease 8s;
  -webkit-animation: fadeOut ease 8s;
  -moz-animation: fadeOut ease 8s;
  -o-animation: fadeOut ease 8s;
  -ms-animation: fadeOut ease 8s;
}
@keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
}
.slideshow-container1 {
 
  position: relative;
  margin: auto;
  }
 .mySlides1 {display: none;
 }
 .fade1 {
    
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade1 {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade1 {
  from {opacity: .4}
  to {opacity: 1}
}
ul {
   list-style-type: square;
   font-size:30px;
  
}

ul li:before {
   content: "•";
   font-size: 300px; /* or whatever */
   padding-right: 5px;
 
}
.column1{
    float: left;

  padding: 0 10px;
   flex: 0 0 25%;
  display: flex;
  
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <body style="background-color:rgba(128,128,128,0.2);" >
        <div>  
        <div  id="topBar"style="width:100%; height: 12vw; background-color: rgba(0,95,175,0.9);text-align: center;">
            <div style="width:20%; height: 100%;  display: inline; float: left; vertical-align: middle;">
                <img style="float:right;"width=60% height=90% src="nitap_logo.png"/>
            </div>
            <div style="width:78%; height: 80%;  float: right; font-size: 2.5vw;">
                
            <div style="height:10%; width: 100%;">
                
            </div>
                <div style="height:55%; width: 100%; color: white; vertical-align: bottom;  text-align: left; margin-left: 0.7%;font-family: Times New Roman;">
                    NATIONAL INSTITUTE OF TECHNOLOGY,ANDHRA PRADESH
                </div>
                <div style="width:100%; height: 35%;font-family: Algerian; text-align: left; margin-left: 8%;color: white;font-size: 4vw; vertical-align: top;">
                    HOSTEL MANAGEMENT SYSTEM
                </div>
            </div>
        </div>
            
           <div  class="topnav" id="topBar1" id="myTopnav" style="background-color:rgba(0,95,255,1); ">

               <a href="index.php" class="active">Home</a>
               <a href="StudentDashboard.php" >Registration</a>
         <a href="Outing.php">Outing</a>
        <a href='Visitors.php'>Visitors</a>
        <a href="roomAllotment.php">Complaints</a>
        <a href="FeesAndBillsPayments.php">Maintainance</a>
        <a href="StudentInformation.php">Information System</a>
          <a href="LoginNavigation.php">Login</a>
  
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

        



<div style="width: 80%;  margin-left: 10%; margin-top: 0%;  text-align: center; background-color: white;height: 100%;">
   <div class="slideshow-container">

     
<div class="mySlides fade">
  <img src="hostel 2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="hostel 3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
    <img src="hostel 5.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="hostel 6.jpg" style="width:100%">
</div>
     
</div>
<br>

<div style="text-align:center; ">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script>
    
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1;}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div style="width:100%;" class="con">
    <div class="row">
   
  
        <div class="column" >
    <div class="card" style="width:100%;  ">
        <h3 >Rules And Regulations</h3>
      <div class="slideshow-container1">

          <div class="mySlides1 fade1"  >
    <p id="slide1"></p>
</div>
          <hr>
<div class="mySlides1 fade1" >
  <p id="slide2"></p>
</div>
          <hr>
<div class="mySlides1 fade1">
    <p id="slide3"></p>
</div>
          <hr>
<div class="mySlides1 fade1">
 <p id="slide4"></p>
</div>
          <hr>
<div class="mySlides1 fade1">
 <p id="slide5"></p>
</div>
          <hr>
<div class="mySlides1 fade1">
 <p id="slide6"></p>
</div>
</div>
<script>
var slideIndex1 = 0;
showSlides1();
var cur=0,cap=11;

function showSlides1() {
    var notices=["All the students are advised to wear masks while moving inside campus.",
        "If any of the students is suffering from cold or cough,he/she is advised to consult the doctor.",
        "Sanitizers are made available to students in each floor and each student is advised to maintain hygiene",
        "All the students must turn off the taps when it is unnecessary",
        "In case of theft of any of the belongings, the institute is not held responsible",
        "All the students are advised to lock their rooms before going out",
        "Students should park their cycles in the parking lot and institute is not responsible in case of any theft",
        "Bulleying/ragging is strictly prohibited in the hostel premises, and severe action will be taken against student in case of any",
        "All the students are hereby advised to maintain the hostel premises neat and tidy",
        "Mess will be open only in the specified timings and all the students are advised to have their food in the specified timings only",
        "All the students are advised to follow all the rules and regulations laid by the hostel and the institute."];
        var i;
  var slides1 = document.getElementsByClassName("mySlides1");
  if (cur===undefined){
      cur=0;
      cap=11;
  }
  for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "block";  
  }
  slideIndex1++;
  if (slideIndex1 > slides1.length) {slideIndex1 = 1}    
//  for (var j=cur;j<cur+cap;j++){
      
   document.getElementById("slide1").innerHTML=notices[cur%cap];  
    document.getElementById("slide2").innerHTML=notices[(cur+1)%cap]; 
    document.getElementById("slide3").innerHTML=notices[(cur+2)%cap];
    document.getElementById("slide4").innerHTML=notices[(cur+3)%cap];
    document.getElementById("slide5").innerHTML=notices[(cur+4)%cap]; 
    document.getElementById("slide6").innerHTML=notices[(cur+5)%cap];
    cur++;
  //}
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}
</script>


    </div>
  </div>
  <div class="column" >
    <div class="card">
      <h3>ABOUT</h3>
      <p>National Institute Of Technology,Andhra Pradesh is the 31st NIT among the chain of NIT's. It was established in 2015
      and got its permanent campus in 2019. There are separate blocks for girls and boys hostel.There are around 8 blocks for
      boys and 4 blocks for girls. there is a mess facilty nearby each hostel. Each hostel has around 3 floors and each floor
      consisting of 34 rooms. 1st year students stay one per room, 2nd and 3rd year students 2 per room and final year students
      are alloted one room per each person.</p>
      <p>
          There is a ground facility nearby hostels facilitating students to have physical workout. Each hostel is administered by 
          a warden and a couple of caretakers.
      </p>
      <p>
          There is a ground facility nearby hostels facilitating students to have physical workout. Each hostel is administered by 
          a warden and a couple of caretakers.
      </p>
    </div>
  </div>
  
        <div class="column" >
    <div class="card" height="100%;">
      <h3>Guidelines to be followed</h3>
      <ul>
        <li>All the students are hereby informed to seek permission from warden in case of any permission.</li>
        <hr>
        <li>All the students must abide by the rules and regulations laid by the hostel and in case any of the students 
        is found violationg these rules, he/she will not be allowed to stay in the hostels </li>
        <hr>
        <li>The decision of wardens and chief wardens are final and no student is allowed to act beyond these rules </li>
        <hr>
        <li>Students must protect the hostel property and in case of any damage the punishment will be according to the
        decision of warden.</li>
        <hr>
        <li>No violence in encouraged in the hostel premises and the call taken by the warden/ chief warden is final in 
        case of such activities.</li>
      </ul>
    </div>
  </div>



  
</div>
</div>
<div>
    <br><br>
    <br>
    </div>
</div>
<div style="width:100%;">
    <div class="row" style=" background-color:rgb(0,0,0); color:white;width:100%;">
  <div class="column1" style=" width:25%;">
    <h2>Quick Links</h2>
    <p>NIT Andhra Pradesh Official website</p>
    <p>Academic Student Portal</p>
    <p>Academic Faculty Portal</p>
  </div>
  <div class="column1" style=" width:25%;">
    <h2>Important Contacts</h2>
    <p>Chief Warden</p>
    <p>List of hostel incharges</p>
  </div>
  <div class="column1" style=" width:25%;">
    <h2>Important Information</h2>
    <p>List of wardens </p>
    <p>List of caretakers</p>
  </div>
  <div class="column1" style="  width:25%;">
    <h2>Contact</h2>
    <p>In case of any queries, contact ph no: +91 xxxxxxxxxx</p>
  </div>
</div>
</div>

    
    </body>
</html>
