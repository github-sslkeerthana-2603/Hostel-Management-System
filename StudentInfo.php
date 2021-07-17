<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
//session_start();
//$_SESSION["roll_no"]="ho";
?>
<?php
$val=$_COOKIE["regno"];
echo $val;
$con=mysqli_connect('localhost','root','','hostel_registration') or die(mysqli_error($con));
//$var=$_SESSION["username"];
$query="select * from student_info where registration_no = '$val' ";
$query1="select * from  personal_info where registration_no = '$val' ";
$query3="select * from address where registration_no = '$val' ";
$query_result=  mysqli_query($con, $query) or die("query is not executed" .mysqli_error($con));
$query1_result=  mysqli_query($con, $query1) or die("query is not executed" .mysqli_error($con));
$row1=  mysqli_fetch_array($query_result);
$row2=  mysqli_fetch_array($query1_result);
$query3_result=  mysqli_query($con, $query3) or die("query is not executed" .mysqli_error($con));
$row3=  mysqli_fetch_array($query3_result);
if(mysqli_num_rows($query_result)>0) {
    $_SESSION["roll"]=$row1['roll_no'];
	echo $row1['roll_no'];
    $_SESSION["sname"]=$row1['student_name'];
    $_SESSION["mno"]=$row1['student_no'];
    $_SESSION["mail"]=$row1['student_email'];
    $_SESSION["year"]=$row1['year'];
    $_SESSION["branch"]=$row1['branch'];
    $_SESSION["section"]=$row1['section'];
    $_SESSION["regno"]=$row1['registration_no'];
    }
if(mysqli_num_rows($query1_result)>0) {
    $_SESSION["gender"]=$row2['gender'];
    $_SESSION["phy"]=$row2['physically_challenged'];
    $_SESSION["dob"]=$row2['dob'];
    $_SESSION["cat"]=$row2['category'];
    $_SESSION["rel"]=$row2['religion'];
    $_SESSION["nat"]=$row2['nationality'];
    $_SESSION["section"]=$row2['aadhar'];
    $_SESSION["blood"]=$row2['blood_group'];
    }
   
if(mysqli_num_rows($query3_result)>0) {
    $_SESSION["door"]=$row3['door_no'];
    $_SESSION["street"]=$row3['street_name'];
    $_SESSION["city"]=$row3['city'];
    $_SESSION["dis"]=$row3['district'];
    $_SESSION["state"]=$row3['state'];
    $_SESSION["count"]=$row3['country'];
    $_SESSION["pin"]=$row3['pin'];
    }
    ?>
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
  margin-left: 5vw;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
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
}
img{
    width:15vw;
    height:15vw;
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

.col-40{
    float: left;
  width: 40%;
  margin-top: 6px;
}

.col-60{
    float: left;
  width: 60%;
  margin-top: 6px;
}
.col-22{
    
}
.col-16{
    width: 16%; 
    float: left;
      margin-top: 6px;
}
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
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  padding-left: 60px;
}

tr:nth-child(even){background-color: #f2f2f2}
.view{
    margin-top: 10px;
    height: 30px;
    background-color: rgba(128,128,128,0.5);
    font-weight:bold;
    cursor: pointer;
}
</style>
</head>
<body style=" background-color: rgba(128,128,128,0.2);">

<form style="width:80%; margin-left: 10%; height: 100%; background-color: white;">
<div class="row">
  <div class="column">
      <div class="card" style="height:118vh; text-align: left;" >
          <img src="avatar.jpg" alt="profile pic"/>
		  <h1 id="name"></h1>
      <pre id="cont">contact:  </pre>
		 <pre id="mail">email_ID: </pre>
		 <pre id="addr">Address: </pre>
      
    </div>
  </div>

    <div class="column" style="width:75%; margin-top:10px;">
    <div class="card">
  
        <div class="row">
                <h3>STUDENT INFORMATION</h3>
        </div>
        
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
        <label for="roll no">Roll no:</label>
      </div>
      <div class="col-25">
        <input type="text" id="roll_no" name="roll_no" placeholder="Enter roll no">
      </div>
      <div class="col-25">
        <label for="reg_no">Reg no:</label>
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
           <input type="text" id="sname" name="name" placeholder="Enter name">
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
        <label for="section">section:</label>
      </div>
      <div class="col-25">
           <input type="text" id="section" name="section" placeholder="Enter section">
      </div>
             </div>
        
        <div class="row">
      <div class="col-25">
        <label for="branch">Branch:</label>
      </div>
      <div class="col-25">
           <input type="text" id="branch" name="branch" placeholder="Enter branch">
      </div>
      <div class="col-25">
        <label for="gender">Gender:</label>
      </div>
      <div class="col-25">
           <input type="text" id="gender" name="gender" placeholder="Enter gender">
      </div>
             </div>
            <div class="row">
          <div class="col-25">
        <label for="category">Category:</label>
      </div>
      <div class="col-25">
           <input type="text" id="category" name="category" placeholder="Enter category">
      </div>
           <div class="col-25">
               <label for="physically_challenged" style="margin-left:30px;">Physically Challenged:</label>
      </div>
      <div class="col-25">
           <input type="text" id="physically_challenged" name="physically_challenged" placeholder="">
      </div>
             </div>
          
            <div class="row">
          <div class="col-25">
        <label for="religion">Religion:</label>
      </div>
      <div class="col-25">
           <input type="text" id="religion" name="religion" placeholder="Enter religion">
      </div>
           <div class="col-25">
               <label for="dob" style="margin-left:30px;">Date of birth:</label>
      </div>
      <div class="col-25">
           <input type="text" id="dob" name="dob" placeholder="enter dob">
      </div>
             </div>
        
            <div class="row">
          <div class="col-25">
        <label for="aadhar">Aadhar No:</label>
      </div>
      <div class="col-25">
           <input type="text" id="aadhar" name="aadhar" placeholder="Enter aadhar no">
      </div>
           <div class="col-25">
               <label for="blood_group" style="margin-left:30px;">Blood group:</label>
      </div>
      <div class="col-25">
           <input type="text" id="blood_group" name="blood_group" placeholder="enter blood group">
      </div>
             </div>
        
        
        <div class="row">
      <div class="col-25">
        <label for="hostel_name">Hostel Name:</label>
      </div>
      <div class="col-25">
           <input type="text" id="hostel_name" name="hostel_name" placeholder="Enter hostel name">
      </div>
      <div class="col-25">
        <label for="room_no">Room no:</label>
      </div>
      <div class="col-25">
           <input type="text" id="room_no" name="room_no" placeholder="Enter room no">
      </div>
             </div>
     </div>
     
    
    </div>
  
  <div class="column" style="width:75%; margin-top:10px;">
    <div class="card">
    
        <div class="row">
                <h3>PARENT/GUARDIAN INFORMATION</h3>
        </div>
        
       <div class="row">
      <div class="col-25">
        <label for="app_no">Father's Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="app_no" name="app_no" placeholder="Enter application no">
      </div>

    </div>
        <div class="row">
      <div class="col-25">
        <label for="roll no">Father's mobile no:</label>
      </div>
      <div class="col-25">
        <input type="text" id="roll_no" name="roll_no" placeholder="Enter roll no">
      </div>
      <div class="col-25">
        <label for="reg_no">Father's email ID:</label>
      </div>
      <div class="col-25">
        <input type="text" id="reg_no" name="reg_no" placeholder="Enter registration no">
      </div>
    </div>
       
        <div class="row">
      <div class="col-25">
        <label for="name">Mother's Name:</label>
      </div>
      <div class="col-75">
           <input type="text" id="name" name="name" placeholder="Enter name">
      </div>
    </div>
        
        <div class="row">
      <div class="col-25">
        <label for="year">Mother's phone no:</label>
      </div>
      <div class="col-25">
           <input type="text" id="year" name="year" placeholder="Enter year">
      </div>
      <div class="col-25">
        <label for="section">Mother's email ID:</label>
      </div>
      <div class="col-25">
           <input type="text" id="section" name="section" placeholder="Enter section">
      </div>
             </div>
        
      
    </div>
  </div>
  
  <div class="column" style="width:100%; margin-top:10px;">
    <div class="card">
      <h3>DOCUMENTS</h3>
      <div class="row">
      <div class="col-25">
        <label for="marks">Transaction ID:</label>
      </div>
          <div class="col-75" >
           <input type="text" id="marks" name="marks" placeholder="Enter marks">
      </div>
          
    </div>
      
      <div class="row">
      <div class="col-16">
        <label for="">Photograph:</label>
      </div>
      <div class="col-16">
          <button class="view">View photograph</button>
      </div>
      <div class="col-16">
        <label for=""> Signature:</label>
      </div>
      <div class="col-16">
          <button class="view">View signature</button>
      </div>
          <div class="col-16">
        <label for="">Fee Receipt:</label>
      </div>
      <div class="col-16">
          <button class="view">View fee receipt</button>
      </div>
    </div>
    </div>
  </div>
</div>
 <script>
        document.getElementById('roll').innerHTML+='<?php echo $_SESSION["roll"] ;?>';
		  document.getElementById('mail').innerHTML+='<?php echo $_SESSION["mail"] ;?>';
		  document.getElementById('name').innerHTML+='<?php echo $_SESSION["sname"] ;?>';
		  document.getElementById('sname').innerHTML+='<?php echo $_SESSION["sname"] ;?>';
		  document.getElementById('addr').innerHTML+='this nikhila is nikhila hello';
		  document.getElementById('year').innerHTML+='<?php echo $_SESSION["year"] ;?>';
		  document.getElementById('section').innerHTML+='<?php echo $_SESSION["section"] ;?>';
		  document.getElementById('branch').innerHTML+='<?php echo $_SESSION["branch"] ;?>';
		 document.getElementById('gender').innerHTML+='<?php echo $_SESSION["gender"] ;?>';
		  document.getElementById('category').innerHTML+='<?php echo $_SESSION["cat"] ;?>';
		  document.getElementById('phy').innerHTML+='<?php echo $_SESSION["phy"] ;?>';
		  document.getElementById('religion').innerHTML+='<?php echo $_SESSION["rel"];?>';
		  document.getElementById('dob').innerHTML+='<?php echo $_SESSION["dob"];?>';
		  document.getElementById('aadhar').innerHTML+='<?php echo $_SESSION["aadhar"] ;?>';
		  document.getElementById('blood').innerHTML+='<?php echo $_SESSION["blood"] ;?>';
		  document.getElementById('hostel').innerHTML+='<?php echo $_SESSION["hname"] ;?>';
		  document.getElementById('room').innerHTML+='<?php echo $_SESSION["room"] ;?>';
		  document.getElementById('fname').innerHTML+='<?php echo $_SESSION["fname"] ;?>';
		  document.getElementById('fno').innerHTML+='<?php echo $_SESSION["fno"] ;?>';
		  document.getElementById('fmail').innerHTML+='<?php echo $_SESSION["fmail"] ;?>';
		  document.getElementById('mname').innerHTML+='<?php echo $_SESSION["mname"] ;?>';
		  document.getElementById('mno').innerHTML+='<?php echo $_SESSION["mno"] ;?>';
		  document.getElementById('mmail').innerHTML+='<?php echo $_SESSION["mmail"] ;?>';
		  //document.getElementById('tid').innerHTML+='<?php echo $_SESSION["roll"] ;?>';
		  
</form>
</body>
</html>
