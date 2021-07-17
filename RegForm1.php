<html>
    <head>
        <title>
            Student Information
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
        <h1>STUDENT INFORMATION</h1>
            <form>
                <label for="roll_no"> Roll No:</label>
                <input type="text" id="roll_no" name="roll_no" placeholder="enter roll no" /><br>
                
                <label for="registration_no">Registration No:</label>
                <input type="text" id="registration_no" name="registration_no" placeholder="enter registration no" required><br>
                <label for="student_name"> Student Name:</label>
                <input type="text" id="student_name" name="student_name" placeholder="enter student's name"><br>
                <label for="year"> Year</label>
                <select id="year" class="year">
                    <option value="selyear">---------------------------------------------select year-------------------------------------------</option>
                    <option value="1st year">I</option>
                    <option value="2nd year"> II </option>
                    <option value="2nd year"> III </option>
                    <option value="2nd year"> IV </option>
                </select> <br>
                <label for="branch"> Branch:</label>
                <select id="branch" class="branch">
                    <option value="selbranch">---------------------------------------------select branch-------------------------------------------</option>  
                    <option value="CSE">Computer Science And Engineering(CSE)</option>
                    <option value="ECE">Electronics And Communication Engineering(CSE)</option>
                    <option value="EEE">Electrical And Electronics Engineering(CSE)</option>
                    <option value="ME">Mechanical Engineering(ME)</option>
                    <option value="CE">Civil Engineering(CE)</option>
                    <option value="BIE">Biotechnology Engineering(BIE)</option>
                    <option value="CHE">Chemical Engineering(CHE)</option>
                    <option value="MME">Metallurgy Engineering(MME)</option>
                </select><br>
                <label for="section" > Section:</label>
                <select id="section" class="section">
                    <option value="selsec" selected="select">---------------------------------------------select section-------------------------------------------</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
                <option value="e">E</option>
                <option value="f">F</option>
                <option value="g">G</option>
                <option value="h">H</option>
                
                
                </select>
                <label for="student_no"> Student's Mobile No:</label>
                <input type="text" id="student_no" name="student_no" placeholder="enter student's mobile no"><br>
               <label for="student_email">Student's email ID:</label>
                <input type="text" id="student_email" name="student_email" placeholder="enter student's email id"><br>
          
                <script type="text/javascript">
                 function addText(){
                   
                    sessionStorage.setItem("a1",document.getElementById("roll_no").value);
                    sessionStorage.setItem("a2",document.getElementById("registration_no").value);
                    sessionStorage.setItem("a3",document.getElementById("student_name").value);
                    sessionStorage.setItem("a7",document.getElementById("student_no").value);
                    sessionStorage.setItem("a8",document.getElementById("student_email").value);
                    
                     }
                              </script>
                
                <script type="text/javascript">
            function a(){
                document.getElementById("roll_no").value=sessionStorage.getItem("a1");
                document.getElementById("registration_no").value=sessionStorage.getItem("a2");
                document.getElementById("student_name").value=sessionStorage.getItem("a3");
                document.getElementById("student_no").value=sessionStorage.getItem("a7");
                document.getElementById("student_email").value=sessionStorage.getItem("a8");
                  function b(){ var sel=document.querySelector(".year");
                    var selopt=sel.options[sel.selectedIndex];
                    var lastsel=sessionStorage.getItem('a4');
                    if (lastsel){ sel.value=lastsel; } 
                    sel.onchange=function(){
                        lastsel=sel.options[sel.selectedIndex].value;
                        sessionStorage.setItem('a4',lastsel);
                       // alert(sessionStorage.getItem("a4"));
                    }
                    var sel_1=document.querySelector(".branch");
                    var selopt_1=sel_1.options[sel_1.selectedIndex]; 
                    var lastsel_1=sessionStorage.getItem('a5'); 
                    if (lastsel_1){ sel_1.value=lastsel_1; 
                    } sel_1.onchange=function(){ 
                        lastsel_1=sel_1.options[sel_1.selectedIndex].value;
                        sessionStorage.setItem('a5',lastsel_1); 
                    }
    
                    var sel_2=document.querySelector(".section");
                    var selopt_2=sel_2.options[sel_2.selectedIndex]; 
                    var lastsel_2=sessionStorage.getItem('a6'); 
                    if (lastsel_2){ sel_2.value=lastsel_2; 
                    } sel_2.onchange=function(){ 
                        lastsel_2=sel_2.options[sel_2.selectedIndex].value;
                        sessionStorage.setItem('a6',lastsel_2);  
                        
    }
                
    
                  }
                  b();
              };
            a();
            
        </script>
       
                
        <button type="button" onclick="addText(); location.href='RegForm2.php'" value="submit" style="margin-top:20px; margin-left:1070px; background-color:rgb(135,215,255); height:40px;">NEXT</button>
                    
            </form>
        </div>
    </body>
</html>