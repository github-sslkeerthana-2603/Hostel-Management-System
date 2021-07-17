<html>
    <head>
        <title>
            Personal Information
        </title>
        <link rel="stylesheet" type="text/css" href="RegForm1css.css">
        
    </head>
    <body>
        <div style="width:1500px; margin-top: 20px; font-size:75px; text-align:center; margin-bottom: 20px; color:white; font-weight: 500px; border-bottom-color: hsl  ;font-family:Times New Roman; " >
            HOSTEL REGISTRATION FORM
        </div>
        <div style=" height:600px;">
            <button onClick="addText();location.href='index.php'">Student Information</button>
             <button onClick="addText();location.href='RegForm2.php'">Personal Information</button>  
            <button onClick="addText();location.href='RegForm3.php'">Parent/Guardian Information</button>
            <button onClick="addText();location.href='RegForm4.php'">Address For Communication</button>
            <button onClick="addText();location.href='RegForm5.php'">Upload Documents</button>
            <button onClick="addText();location.href='RegForm6.php'" style= "height:42px;">Undertaking</button>
            <button onClick="addText();location.href='PreviewReg.php'" style= "height:42px;">Preview</button>  
        </div>
        
        <div style="background-color: white;  width:1314px; height:600px;"  >
        <h1>PERSONAL INFORMATION</h1>
            <form>
                <form>
                 <label >Gender:</label>
                 
                <input type="radio" id="male" name="gender" value="male" style="width: 20px; float: none; width:20px; margin-right:10px; margin-left:300px; margin-bottom:  0px;">
                <label for="male" style="font-family: Calibri; font-size: 25px; margin-left: 10px; margin-right: 40px;">male</label>
               <input type="radio" id="female" name="gender" value="female" style="width: 20px; float: none; width:20px; margin-right:10px;">
               <label for="female" style="font-family: Calibri; font-size: 25px; margin-left: 10px; margin-right: 40px;">female</label><br>
               
               <label >Physically Challenged:</label>
                <input type="radio" id="pcyes" name="pc" value="pcyes" style="width: 20px; margin-top: 10px;float: none; width:20px; margin-right:0px; margin-left:73px;margin-bottom:  0px;" required>
                <label for="pcyes" style="font-family: Calibri; font-size: 25px; margin-left: 30px; margin-top: 10px; margin-right: 20px;">yes</label>
                <input type="radio" id="pcno" name="pc" value="pcno" style="width: 20px; float: none;  margin-top: 10px;width:20px; margin-right:10px; margin-left: 33px;" required>
               <label for="pcno" style="font-family: Calibri; font-size: 25px; margin-left: 14px; margin-right: 40px; margin-top: 10px;">no</label><br>
               
               <label for="dob"> Date of Birth:</label>
              <input type="date" id="dob" name="dob"><br>
                <label >Category:</label>
                <select class="category">
                    <option> select category</option>
                    <option> general</option>
                    <option>OBC</option>
                    <option> SC </option>
                    <option> ST </option>
                </select><br>
                <label for="religion"> Religion:</label>
                <input type="text" id="religion" name="religion" placeholder="enter religion"><br>
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" placeholder="enter nationality"><br>
                <label for="aadhar" >Aadhar no:</label>
                <input type="text" id="aadhar" name="aadhar" placeholder="enter aadhar no"><br>
                <label for="blood_group"> Blood Group:</label>
                <select class="blood_group">
                    <option>select blood group</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                
                </select>
                   <script type="text/javascript">
                 function addText(){
                   
                    sessionStorage.setItem("b3",document.getElementById("dob").value);
                    sessionStorage.setItem("b5",document.getElementById("religion").value);
                    sessionStorage.setItem("b6",document.getElementById("nationality").value);
                    sessionStorage.setItem("b7",document.getElementById("aadhar").value);
                    var ele=document.getElementById("male");
                    var ele1=document.getElementById("female");
                    var ele2=document.getElementById("pcyes");
                    var ele3=document.getElementById("pcno");
                    if (ele.checked){
                        sessionStorage.setItem("b1","male");
                    }
                    if (ele1.checked){
                        sessionStorage.setItem("b1","female");
                    }
                    if (ele2.checked){
                        sessionStorage.setItem("b2","yes");
                    }
                    if (ele3.checked){
                        sessionStorage.setItem("b2","no");
                    }
                  
    }
                              </script>
                
                <script type="text/javascript">
            function a(){
               
                document.getElementById("dob").value=sessionStorage.getItem("b3");
                document.getElementById("religion").value=sessionStorage.getItem("b5");
                document.getElementById("nationality").value=sessionStorage.getItem("b6");
                document.getElementById("aadhar").value=sessionStorage.getItem("b7");
                //document.getElementById("")
            /*  var val1=sessionStorage.getItem("b1");
                var val2=sessionStorage.getItem("b2");
                var ele2=document.getElementById("gender");
                var ele3=document.getElementById("pc");
                for (i=0;i<ele2.length;i++){
                    if (ele2[i].value === val1){
                        ele2[i].checked=true;
                    } 
                    if (ele3[i].value === val2){
                        ele3[i].checked=true;
                    } 
                }*/
        if (sessionStorage.getItem("b1")==="male"){
            document.getElementById("male").checked=true;
        }
        
        if (sessionStorage.getItem("b1")==="female"){
            document.getElementById("female").checked=true;
        }
        
        if (sessionStorage.getItem("b2")==="yes"){
            document.getElementById("pcyes").checked=true;
        }
        
        if (sessionStorage.getItem("b2")==="no"){
            document.getElementById("pcno").checked=true;
        }
                function b(){ var sel=document.querySelector(".category");
                    var selopt=sel.options[sel.selectedIndex];
                    var lastsel=sessionStorage.getItem('b4');
                    if (lastsel){ sel.value=lastsel; } 
                    sel.onchange=function(){
                        lastsel=sel.options[sel.selectedIndex].value;
                        sessionStorage.setItem('b4',lastsel);
                    }
                    var sel_1=document.querySelector(".blood_group");
                    var selopt_1=sel_1.options[sel_1.selectedIndex]; 
                    var lastsel_1=sessionStorage.getItem('b8'); 
                    if (lastsel_1){ sel_1.value=lastsel_1; 
                    } sel_1.onchange=function(){ 
                        lastsel_1=sel_1.options[sel_1.selectedIndex].value;
                        sessionStorage.setItem('b8',lastsel_1); } }
                b();
    };
            a();
        </script>
        <button type="button" onclick="addText(); location.href='index.php'" value="submit" style="margin-top:20px; margin-left:30px; background-color:rgb(135,215,255); height:40px; float: left;">PREVIOUS</button>
        
        <button type="button" onclick="addText(); location.href='RegForm3.php'" value="submit" style="margin-top:20px; margin-right:40px; background-color:rgb(135,215,255); height:40px; float: right;">NEXT</button>
       
               
                    
            </form>
        
        </div>
    </body>
</html>