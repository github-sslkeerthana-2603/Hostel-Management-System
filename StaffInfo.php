<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <h1>Mr. xxxxxxxx</h1>
      <h2>Contact Information</h2>
      <p>ph no: xxxxx xxxxx</p>
      <p>email id: abcdef@gmail.com</p>
      <p>  Landline:xxxxxxxxx </p>
      <h2>Address for communication</h2>
      <p>door no: xxxxxxxxxxx</p>
      <p>street name: xxxxxxxxxxx </p>
       <p>city: xxxxxxxxxxx </p>
        <p>district: xxxxxxxxxxx </p>
         <p>state: xxxxxxxxxxx </p>
          <p>country: xxxxxxxxxxx </p>
          <p>pin code: xxxxxxxxx</p>
          
      
    </div>
  </div>

    <div class="column" style="width:75%; margin-top:10px;">
    <div class="card">
  
        <div class="row">
                <h3>EMPLOYEE INFORMATION</h3>
        </div>
        
       <div class="row">
      <div class="col-25">
        <label for="app_no">Faculty ID:</label>
      </div>
      <div class="col-25">
        <input type="text" id="app_no" name="app_no" placeholder="Enter application no">
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
        <label for="gender">Gender:</label>
      </div>
      <div class="col-25">
           <input type="text" id="gender" name="gender" placeholder="Enter gender">
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
        
        
        <div class="row">
      <div class="col-25">
        <label for="hostel_name">Designation:</label>
      </div>
      <div class="col-25">
           <input type="text" id="hostel_name" name="hostel_name" placeholder="Enter hostel name">
      </div>
      <div class="col-25">
        <label for="room_no">Salary:</label>
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
      <div class="col-75">
        <input type="text" id="roll_no" name="roll_no" placeholder="Enter roll no">
      </div>
        </div><div class="row">
      <div class="col-25">
        <label for="reg_no">Father's email ID:</label>
      </div>
      <div class="col-75">
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
      <div class="col-75">
           <input type="text" id="year" name="year" placeholder="Enter year">
      </div>        </div><div class="row">

      <div class="col-25">
        <label for="section">Mother's email ID:</label>
      </div>
      <div class="col-75">
           <input type="text" id="section" name="section" placeholder="Enter section">
      </div>
             </div>
        
      
    </div>
  </div>
  <div class="column" style="width:100%;  margin-top:10px;">
      <div class="card" style="height:100%;">
      <h3>DOCUMENTS</h3>
      
      
      <div class="row">
      <div class="col-25">
        <label for="">Photograph:</label>
      </div>
      <div class="col-25">
          <button class="view">View photograph</button>
      </div>
      <div class="col-25">
        <label for=""> Signature:</label>
      </div>
      <div class="col-25">
          <button class="view">View signature</button>
      </div>
    </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
