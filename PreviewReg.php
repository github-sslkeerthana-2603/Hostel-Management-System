<html>
    <head>
        <title>
            Preview Form
        </title>
        <style>
            .picz{
                
            }
            label{
                font-size:30px;
                font-family: Calibri;
                float: left;
                margin-left: 80px;
                
      
            }
            input{
                margin-top: 10px;
                width:600px;
                font-size: 20px;
                height:25px;
                margin-left: 20px;
                float:left;
                margin-left: 30px;
                margin-right: 50px;
            }
        </style>
    </head>
    <body style="margin:50px 50px 50px 50px; border-style: solid; border-color:black;"  >
        <div style="height:100px;;">
            <h1 style="font-size: 80px; font-family: Times New Roman; margin-top: 50px; text-align: center;">
                HOSTEL APPLICATION FORM
               </h1> 
        </div>
        <div style="height:80px; border-style: solid; border-bottom-color:black; border-top-color: white; border-left-color:white;border-right-color:white;">
             <p style="font-family: calibri ; font-size: 30px; float: left; margin-left: 30px; margin-bottom: 0px;">
                    Application No:
                </p>
                <input id="app" type="text"style="width:200px; height: 30px; margin-top: 30px;">
                <input id="dt" type="text"style="width:200px; height: 30px; float: right; margin-top: 30px;">
                
                <p style="font-family: calibri ; font-size: 30px; float: right; margin-right: 10px; margin-bottom: 0px;">
                    Date:
                </p>
                
        </div>
        <div style="padding-left: 0px;">
            <form>
                <div style="width:300px; height:250px; float: right; margin-top: 0px;">
                    
                    <div style="width:300px; height: 220px;">
                        <output id="photo1" style="margin-left: 30px; margin-top: 30px; height:220px; width:300px;" ></output>
                    </div >
                    <div style="width:300px; height: 30px;">
                        <output id="photo2" style="margin-left: 30px; margin-top: 150px; height: 30px; width: 50px;" ></output>
                    </div>
                </div>
              
                     <script>
                         function a(){
                             document.getElementById("photo1").innerHTML=sessionStorage.getItem("e1");
                             document.getElementById("photo2").innerHTML=sessionStorage.getItem("e2");
                
    }
                         a();
                    </script>
                    
              
                <div style="margin-top:80px; margin-bottom: 0px;">
                <label for="p1" > Roll no:</label>
                <input id="p1" style="width:200px; float: left;" name='roll_no' id="p1"/>
                <label > Registration no: </label>
                <input id="p2" style="width:200px;  float: left;"name= 'registration_no'/><br>
                </div><div style="float:left; margin-top: 30px; width:1100px;">
                <label>Student Name:</label>
                <input id="p3" name='student_name'/>
                </div><br>
                <div style=" width:1150px; height: 100px;">
                    <label for="p4" style="margin-top:30px; margin-bottom: 0px;"> Year:</label>
                    <input style="width:100px; float: left;margin-bottom: 0px; margin-top:40px;" name='year' id="p4"/>
                    <label for="p5" style="margin-left:20px; margin-top:30px;margin-bottom: 0px;" > Branch: </label>
                    <input id="p5" name='branch'style="width:300px;margin-left: 20px;margin-top:40px; margin-bottom: 0px;float: left;"/><br>
                    <label for="p6" style="margin-left:20px;margin-top:30px;margin-bottom: 0px;"> Section: </label>
                    <input id="p6"name='section' style="width:80px; margin-top:40px; float: left;margin-bottom: 0px; margin-left: 20px;"/><br>
                    
                </div>
                    
                    
                <div style="height:320px; margin-top: 0px; ">
                <div style="height:100px;">
                    <label for="p7" style="float:left;margin-top:30px; ">Category:</label>
                    <input type="text" id="p7" name="category" style="float: left;margin-top:40px; width: 150px; height: 30px;"/><br>
                       
                    <label for="p8" style="float:left; margin-left: 10px; margin-top: 30px;">Gender:</label>
                    <input type="text" id="p8" name="gender" style="margin-top:35px; margin-left: 10px;float: left;  width: 100px; height: 30px;"/><br>
                     
                    <label for="p9" style="float:left; margin-left: 0px; margin-top: 28px;">Physically Challenged:</label>
                    <input type="text" id="p9" name="phy" style=" margin-top: 33px;margin-left: 10px;float: left;  width: 80px; height: 30px;"/><br>
                    
                    </div> <br>
                    <div style="float:left; height: 70px; margin-top: 15px;">
                    
                    <label for="p10" style="float:left;">Date Of Birth:</label>
                    <input type="text" id="p10" name="dob" style="width: 200px;"/>
                   
                    <label for="p11" style="float:left; margin-left: 0px;">Religion:</label>
                    <input type="text" id="p11" name="religion" style="width: 230px;"/>
                    
                    <label for="p12" style="float:left; margin-left: 0px;">Nationality:</label>
                    <input type="text" id="p12" name="nationality" style="width: 230px;"/>
                    
                    </div>
                    <div style="float: left; height: 50px;">
                        <label for="p13">Blood Group:</label>
                        <input type="text" id="p13" name="blood_group" style="width:80px; margin-right: 10px;margin-left: 30px; "/>
                        
                        <label for="p14" style="margin-left:30px;">Aadhar no:</label>
                        <input type="text" id="p14" name="aadhar_no" style="width: 300px; margin-right: 20px;margin-left: 0px;"/>
                        
                        <label for="p15" style="margin-left:30px; margin-top: 0px;">Mobile no:</label>
                        <input type="text" id="p15" name="mobile_no" style="width: 300px;margin-top: 10px; margin-left: 20px; margin-right: 10px;"/>
                    </div><br>
                    <div style="height:50px;">
                        <label for="p16" style="margin-left:80px;margin-top: 10px; float: left;">Email ID: </label>
                        <input type="text" id="p16" name="email_id" style="width: 500px; margin-top: 20px;margin-left: 30px; margin-right: 10px;"/>
                        
                    
                </div> 
                    
                    
                </div>
                <div style="height:300px; border-top-color:black; border-top-style: solid;">
                    <div style="height:80px;">
                    <label>ADDRESS FOR COMMUNICATION</label><br>
                    </div>
                    <div style="height:70px; float:left;">
                    
                    <label for="p17">Door No:</label>
                    <input type="text" name="door_no" id="p17" style="width: 200px;"/>
                    
                    <label for="p18">Street Name:</label>
                    <input type="text" name="street_name" id="p18" style="width: 600px;"/>
                    
                    </div>
                    <div style="height: 100px; width:1500px;">
                    <label for="p19">City:</label>
                    <input type="text" name="city" id="p19" style="width: 200px; margin-right: 0px "/>
                    
                    <label for="p20" style="margin-left:10px;">District:</label>
                    <input type="text" name="district" id="p20" style="width: 200px; margin-right: 0px;"/>
                    
                    <label for="p21" style="margin-left:10px;">State:</label>
                    <input type="text" name="state" id="p21" style="width: 200px;  margin-right: 0px"/>
                    
                    <label for="p22"  style="margin-left:10px;">Country:</label>
                    <input type="text" name="country" id="p22" style="width: 200px; margin-right: 0px;"/>
                    
                    </div>
                    <div style="float:left; height: 80px; margin-top: 30px;">
                       <label for="p23">Pin Code:</label>
                        <input type="text" name="pin" id="p23" style="width:250px;"/>
                        
                       <label for="p24">Landline:</label>
                        <input type="text" name="landline" id="p24" style="width:300px;"/>
                   
                    </div>
                </div>
                <div style="height: 460px; border-top-color: black; border-top-style: solid;">
                    <div style="height:60px;">
                    <label> PARENT/GUARDIAN INFORMATION</label><br>
                    </div>
                    <div style="height:60px; width: 1500px;">
                        <label for="p25">Father/Guardian's Name:</label>
                        <input type="text"style="float:right; margin-right: 400px;" id='p25' name='fname'/>
                    </div>
               <div style="height:60px; width: 1500px;">
                        <label for="p26">Father/Guardian's Mobile No:</label>
                        <input type="text" style="float:right; margin-right: 400px;"id='p26' name='fno'/>
                    </div>
                <div style="height:60px; width: 1500px;">
                        <label for="p27">Father/Guardian's email ID:</label>
                        <input type="text" style="float:right; margin-right: 400px;"id='p27' name='fmail'/>
                    </div>
               <div style="height:60px; width: 1500px;">
                        <label for="p28">Mother's Name:</label>
                        <input type="text" style="float:right; margin-right: 400px;"id='p28' name='mname'/>
                    </div>
               <div style="height:60px; width: 1500px;">
                        <label for="p29">Mother's Mobile No:</label>
                        <input type="text"style="float:right; margin-right: 400px;" id='p29' name='mno'/>
                    </div>
               <div style="height:60px; width: 1500px;">
                        <label for="p30">Mother's email ID:</label>
                        <input type="text" style="float:right; margin-right: 400px;" id='p30' name='mmail'/>
             
               </div>
             
            
               
                <script>
            if (!localStorage.getItem('app')){
                var x=9821501;
                localStorage.setItem('app',x);
            }
            document.getElementById('app').value=localStorage.getItem('app');
            var d=new Date();
            document.getElementById('dt').value=d.getDate()+'/'+parseInt(d.getMonth()+1)+'/'+d.getFullYear();
        </script>
        <script>
            
            function appNext(){
                var y=localStorage.getItem('app');
                var z=parseInt(y)+1;
                localStorage.setItem("app",z);
            }
        </script>
            <script>
                document.getElementById("p1").value=sessionStorage.getItem("a1");
                document.getElementById("p2").value=sessionStorage.getItem("a2");
                document.getElementById("p3").value=sessionStorage.getItem("a3");
                document.getElementById("p4").value=sessionStorage.getItem("a4");
                document.getElementById("p5").value=sessionStorage.getItem("a5");
                document.getElementById("p6").value=sessionStorage.getItem("a6");
                document.getElementById("p7").value=sessionStorage.getItem("b4");
                document.getElementById("p8").value=sessionStorage.getItem("b1");
                document.getElementById("p9").value=sessionStorage.getItem("b2");
                document.getElementById("p10").value=sessionStorage.getItem("b3");
                document.getElementById("p11").value=sessionStorage.getItem("b5");
                document.getElementById("p12").value=sessionStorage.getItem("b6");
                document.getElementById("p13").value=sessionStorage.getItem("b8");
                document.getElementById("p14").value=sessionStorage.getItem("b7");
                document.getElementById("p15").value=sessionStorage.getItem("a7");
                document.getElementById("p16").value=sessionStorage.getItem("a8");
                document.getElementById("p17").value=sessionStorage.getItem("d1");
                document.getElementById("p18").value=sessionStorage.getItem("d2");
                document.getElementById("p19").value=sessionStorage.getItem("d3");
                document.getElementById("p20").value=sessionStorage.getItem("d4");
                document.getElementById("p21").value=sessionStorage.getItem("d5");
                document.getElementById("p22").value=sessionStorage.getItem("d6");
                document.getElementById("p23").value=sessionStorage.getItem("d7");
                document.getElementById("p24").value=sessionStorage.getItem("c7");
                document.getElementById("p25").value=sessionStorage.getItem("c1");
                document.getElementById("p26").value=sessionStorage.getItem("c2");
                document.getElementById("p27").value=sessionStorage.getItem("c3");
                document.getElementById("p28").value=sessionStorage.getItem("c4");
                document.getElementById("p29").value=sessionStorage.getItem("c5");
                document.getElementById("p30").value=sessionStorage.getItem("c6");
               sessionStorage.setItem("z1",document.getElementById("app").value);
               sessionStorage.setItem("z2",document.getElementById("dt").value);
            </script>
                </form>
                     </div>
                  
            <div style="width:100%;">
    <button onClick="location.href='index.php'" style="background-color: lightblue;width: 100px; font-size: 15px;height: 50px; margin-left: 50px; margin-bottom: 30px;float: left;">MODIFY</button>
            <input type="submit" onClick="appNext();location.href='PreviewFeeReceipt.php'" style="font-size: 15px;background-color: lightblue;width: 100px; height: 50px; margin-left: 1100px; margin-bottom: 30px; " value='CONFIRM'/>

            </div>
                </div>
          
               
          
   </body>
</html>