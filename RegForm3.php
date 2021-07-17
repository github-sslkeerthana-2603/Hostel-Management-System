<html>
    <head>
        <title>
            Parent/Guardian's Information
        </title>
        <link rel="stylesheet" type="text/css" href="RegForm1css.css">
    </head>
    <body>
        <div style="width:1500px; margin-top: 20px; font-size:75px; text-align:center; margin-bottom: 20px; color:white; font-weight: 500px; border-bottom-color: hsl  ;font-family:Times New Roman; " >
            HOSTEL REGISTRATION FORM
        </div>
        
        <div style=" height:600px;">
             <div style=" height:600px;">
            <button onClick="addText();location.href='index.php'">Student Information</button>
             <button onClick="addText();location.href='RegForm2.php'">Personal Information</button>  
            <button onClick="addText();location.href='RegForm3.php'">Parent/Guardian Information</button>
            <button onClick="addText();location.href='RegForm4.php'">Address For Communication</button>
            <button onClick="addText();location.href='RegForm5.php'">Upload Documents</button>
            <button onClick="addText();location.href='RegForm6.php'" style= "height:42px;">Undertaking</button>
            <button onClick="addText();location.href='PreviewReg.php'" style= "height:42px;">Preview</button>  
        </div>
        
        </div>
        <div style="background-color: white;  width:1314px; height:600px;"  >
        <h1>PARENT/GUARDIAN INFORMATION</h1>
            <form>
                <label for="fname"> Father's Name: </label>
                <input type="text" id="fname" name="fname" placeholder="enter father/guardian's name" required ><br>
                <label for="fno">Father's Mobile No:</label>
                <input type="text" id="fno" name="fno" placeholder="enter father/guardian's mobile no"><br>
                <label for="fmail"> Father's email ID:</label>
                <input type="text" id="fmail" name="fmail" placeholder="enter father/guardian's email id"><br>
                <label for="mname"> Mother's Name: </label>
                <input type="text" id="mname" name="mname" placeholder="enter mother's name" ><br>
                <label for="mno">Mother's Mobile No:</label>
                <input type="text" id="mno" name="mno" placeholder="enter mother's mobile no" ><br>
                <label for="mmail"> Mother's email ID:</label>
                <input type="text" id="mmail" name="mmail" placeholder="enter mother's email id"><br>
                <label for="landline"> Landline No:</label>
                <input type="text" id="landline" name="landline" placeholder="enter landline no"><br>
                            
           
         <script type="text/javascript">
                 function addText(){
                   
                    sessionStorage.setItem("c1",document.getElementById("fname").value);
                    sessionStorage.setItem("c2",document.getElementById("fno").value);
                    sessionStorage.setItem("c3",document.getElementById("fmail").value);
                    sessionStorage.setItem("c4",document.getElementById("mname").value);
                    sessionStorage.setItem("c5",document.getElementById("mno").value);
                    sessionStorage.setItem("c6",document.getElementById("mmail").value);
                    sessionStorage.setItem("c7",document.getElementById("landline").value);
                    
                  
                     }
                              </script>
                
                <script type="text/javascript">
            function a(){
               
                document.getElementById("fname").value=sessionStorage.getItem("c1");
                document.getElementById("fno").value=sessionStorage.getItem("c2");
                document.getElementById("fmail").value=sessionStorage.getItem("c3");
                document.getElementById("mname").value=sessionStorage.getItem("c4");
                document.getElementById("mno").value=sessionStorage.getItem("c5");
                document.getElementById("mmail").value=sessionStorage.getItem("c6");
                document.getElementById("landline").value=sessionStorage.getItem("c7");
                
                
    };
            a();
        </script>
       <button type="button" onclick="addText(); location.href='RegForm2.php'" value="submit" style="margin-top:20px; margin-left:30px; background-color:rgb(135,215,255); height:40px; float: left;">PREVIOUS</button>
        
        <button type="button" onclick="addText(); location.href='RegForm4.php'" value="submit" style="margin-top:20px; margin-right:40px; background-color:rgb(135,215,255); height:40px; float: right;">NEXT</button>
       
          
            </form>
        
        </div>  
                
               
    </body>
</html>