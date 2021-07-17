<html>
    <head>
        <title>
            Upload Documents
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
        <h1>UPLOAD DOCUMENTS</h1>
       
        <form>
            <div>
            <label for="photo" style="float:left; margin-top: 0px;">Upload Photograph:</label>
            <input type="file" id="photo" name="photo" accept="image/*" style="margin-top: 10px;width:500px;display: block; margin-left: 60px; float:right;" required>
            <input type="text" id="photo1" style="margin-top: 10px; width: 500px; margin-left:59px;float: left; display: none; margin-right: 0px; margin-top: 5px;"/>
            <button id="button1" onclick="fun1();"style="float:left; margin-top: 0px;height: 35px; display: none; margin-right: 20px; background-color: rgba(175,175,255,0.5);">modify</button>
            </div><div>
            <label for="sign" style="float:left;margin-top: 0px;">Upload Signature:</label>
            <input type="file" id="sign" name="sign" accept="image/*" style="margin-top: 10px;width:500px;display: block; margin-left:82px; ">
            <input type="text" id="photo2" style=" width: 500px;float: left;margin-top: 10px;margin-left:82px; display: none;margin-right: 0px;margin-top: 5px;"/>
            <button id="button2" onclick="fun2()"style="float:left; margin-top: 0px;height: 35px; display: none;margin-right:20px; background-color: rgba(175,175,255,0.5);">modify</button>
            </div><div>
            <label for="feerec" style="margin-top: 0px;float:left;">Upload Fee Receipt:</label>
            <input type="file" id="feerec" name="feerec" accept="image/*" style="margin-top: 10px;display: block;width:500px; margin-left: 50px; ">
            <input type="text" id="photo3" style=" width: 500px;float: left;margin-top: 10px;margin-left:50px;   display: none;margin-right: 0px;margin-top: 5px;" />
            <button id="button3" onclick="fun3()"style="float:left; margin-top: 0px; height: 35px; margin-right:20px;display: none; background-color: rgba(175,175,255,0.5);">modify</button>
            </div><div>
            <label style="margin-top: 0px;float:left;">Enter Transaction ID:</label>
            <input type="text" id="trscID" name="trscID" style="width:600px; margin-left: 12px;" value="C:\Users\Sai Lakshmi Keerthan\Pictures\Screenshots\Screenshot (3).png" placeholder="enter transaction ID"><br>
            </div><div style="width:1000px; height: 200px;">
            <output id="pics1" style="margin-left: 100px; margin-top: 50px;" ></output>
            <output id="pics2" style="margin-left: 30px; margin-top: 0px;"></output>
            <output id="pics3" style="margin-left: 30px; margin-top: 30px;"></output>
            <output id="pics4" style="margin-left: 30px; margin-top: 30px; display: none;"></output>
            </div>
             <script>
         
        function fun1(){
                    document.getElementById("pics1").style.display='none';
                      document.getElementById("photo1").style.display='none';
                        document.getElementById("button1").style.display='none';
                    document.getElementById("photo").style.display='block';
                    
                }
        
        function fun2(){
                    document.getElementById("pics2").style.display='none';
                      document.getElementById("photo2").style.display='none';
                        document.getElementById("button2").style.display='none';
                    document.getElementById("sign").style.display='block';
                    
                }
        
        function fun3(){
                    document.getElementById("pics3").style.display='none';
                      document.getElementById("photo3").style.display='none';
                        document.getElementById("button3").style.display='none';
                    document.getElementById("feerec").style.display='block';
                    
                }
        </script>
            <script>
                            if (window.FileReader){

document.getElementById('photo').addEventListener('change', handleFileSelect, false);

                 
            function handleFileSelect(evt) {
            

               var oldValue=document.getElementById("photo").value;
                sessionStorage.setItem("e11",oldValue);
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
         
          reader.onload = (function(theFile) {
                return function(e) {
                  document.getElementById('pics1').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="250" height="200"/>'].join('');
                  sessionStorage.setItem("e1",document.getElementById("pics1").innerHTML);
               
                };
          })(f);
           
          reader.readAsDataURL(f);
   document.getElementById("photo1").value=document.getElementById('photo').value;       
document.getElementById("photo").style.display="none";
      
          document.getElementById("photo1").style.display="block";
          document.getElementById("button1").style.display="block";
          sessionStorage.setItem("e11",document.getElementById('photo1').value);
       
}


document.getElementById('sign').addEventListener('change', handleFileSelect1, false);


           
           
            function handleFileSelect1(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
         
          reader.onload = (function(theFile) {
                return function(e) {
                  document.getElementById('pics2').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="250" height="50"/>'].join('');
                      sessionStorage.setItem("e2",document.getElementById("pics2").innerHTML);
            
                };
          })(f);
           
          reader.readAsDataURL(f);
            document.getElementById("photo2").value=document.getElementById('sign').value;       
document.getElementById("sign").style.display="none";
      
          document.getElementById("photo2").style.display="block";
          document.getElementById("button2").style.display="block";
          sessionStorage.setItem("e22",document.getElementById('photo2').value);
 
}


document.getElementById('feerec').addEventListener('change', handleFileSelect2, false);

                     
            function handleFileSelect2(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
         
          reader.onload = (function(theFile) {
                return function(e) {
            document.getElementById('pics3').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="250" height="250" />'].join('');
                        
            document.getElementById('pics4').innerHTML = ['<img src="', e.target.result,'" title="', theFile.name, '" width="600" height="600" />'].join('');
                  sessionStorage.setItem("e3",document.getElementById("pics3").innerHTML);
                  sessionStorage.setItem("e5",document.getElementById("pics4").innerHTML);
                 
                };
          })(f);
           
          reader.readAsDataURL(f);
            document.getElementById("photo3").value=document.getElementById('feerec').value;       
document.getElementById("feerec").style.display="none";
      
          document.getElementById("photo3").style.display="block";
          document.getElementById("button3").style.display="block";
          sessionStorage.setItem("e33",document.getElementById('photo3').value);
 
}
            }else{
                alert("this browser does'nt support file reader");
            }

                function addText(){
                sessionStorage.setItem("e4",document.getElementById("trscID").value);
             
                }
            </script>
            
            <script>
                function z(){
                    if (sessionStorage.getItem("e11")){
                        document.getElementById("photo1").value=sessionStorage.getItem("e11");
                        document.getElementById("photo").style.display='none';
                        document.getElementById("photo1").style.display='block';
                        document.getElementById("button1").style.display='block';
                        document.getElementById("pics1").innerHTML=sessionStorage.getItem("e1");
                    }
                    
                    if (sessionStorage.getItem("e22")){
                        document.getElementById("photo2").value=sessionStorage.getItem("e22");
                        document.getElementById("sign").style.display='none';
                        document.getElementById("photo2").style.display='block';
                        document.getElementById("button2").style.display='block';
                        document.getElementById("pics2").innerHTML=sessionStorage.getItem("e2");
                    }
                    
                    if (sessionStorage.getItem("e33")){
                        document.getElementById("photo3").value=sessionStorage.getItem("e33");
                        document.getElementById("feerec").style.display='none';
                        document.getElementById("photo3").style.display='block';
                        document.getElementById("button3").style.display='block';
                        document.getElementById("pics3").innerHTML=sessionStorage.getItem("e3");
                    }
                }
                z();
                
            
                </script>
            
            
        <script type="text/javascript">
            document.getElementById("trscID").value=sessionStorage.getItem("e4");
                        </script><div style="margin-top:0px;">
                <button type="button" onclick="addText(); location.href='RegForm4.php'" value="submit" style="margin-top:20px; margin-left:30px; background-color:rgb(135,215,255); height:40px; float: left;">PREVIOUS</button>
        
        <button type="button" onclick="addText(); location.href='RegForm6.php'" value="submit" style="margin-top:20px; margin-left: 850px;margin-right:40px; background-color:rgb(135,215,255); height:40px; float: right;">NEXT</button>
       
                         
                </div>
        </form>
        </div>
    </body>
</html>