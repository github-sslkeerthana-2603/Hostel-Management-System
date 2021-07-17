<html>
    <head>
        <title>
            Address For Communication
        </title>
        <link rel="stylesheet" type="text/css" href="RegForm1css.css">
    </head>
    <style>
        input{
            width:750px;
        }
    </style>
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
        <h1>ADDRESS FOR COMMUNICATION</h1>
            <form>
                <label for="door_no"> Door No: </label>
                <input type="text" id="door_no" name="door_no" placeholder="enter door no" required><br>
                <label for="street_name">Street Name:</label>
                <input type="text" id="street_name" name="street_name" placeholder="enter street name"><br>
                <label for="city"> City:</label>
                <input type="text" id="city" name="city" placeholder="enter city"><br>
                <label for="district"> District:</label>
                <input type="text" id="district" name="district" placeholder="enter district"><br>
                <label for="state"> State:</label>
                <input type="text" id="state" name="state" placeholder="enter state"><br>
                <label for="country"> Country:</label>
                <input type="text" id="country" name="country" placeholder="enter country"><br>
                <label for="pin"> Pin Code:</label>
                <input type="text" id="pin" name="pin" placeholder="enter pin code"><br>
                
                
                <script type="text/javascript">
                 function addText(){
                   
                    sessionStorage.setItem("d1",document.getElementById("door_no").value);
                    sessionStorage.setItem("d2",document.getElementById("street_name").value);
                    sessionStorage.setItem("d3",document.getElementById("city").value);
                    sessionStorage.setItem("d4",document.getElementById("district").value);
                    sessionStorage.setItem("d5",document.getElementById("state").value);
                    sessionStorage.setItem("d6",document.getElementById("country").value);
                    sessionStorage.setItem("d7",document.getElementById("pin").value);
                    
                  
                     }
                              </script>
                
                <script type="text/javascript">
            function a(){
               
                document.getElementById("door_no").value=sessionStorage.getItem("d1");
                document.getElementById("street_name").value=sessionStorage.getItem("d2");
                document.getElementById("city").value=sessionStorage.getItem("d3");
                document.getElementById("district").value=sessionStorage.getItem("d4");
                document.getElementById("state").value=sessionStorage.getItem("d5");
                document.getElementById("country").value=sessionStorage.getItem("d6");
                document.getElementById("pin").value=sessionStorage.getItem("d7");
                
                
    };
            a();
        </script>
                 <button type="button" onclick="addText(); location.href='RegForm3.php'" value="submit" style="margin-top:20px; margin-left:30px; background-color:rgb(135,215,255); height:40px; float: left;">PREVIOUS</button>
        
        <button type="button" onclick="addText(); location.href='RegForm5.php'" value="submit" style="margin-top:20px; margin-right:40px; background-color:rgb(135,215,255); height:40px; float: right;">NEXT</button>
       
            </form>
        </div>
    </body>
</html>