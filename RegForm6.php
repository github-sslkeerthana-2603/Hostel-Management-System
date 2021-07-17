<html>
    <head>
        <title>
            Undertaking
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
      
        
        <div style="background-color: white;  width:1314px; height:600px; "  >
        <h1>UNDERTAKING</h1>
        <div style="width:2000px ;display:inline-block;">
        <div style=" width: 900px; height:350px;    overflow-y: scroll;  margin-left: 200px; overflow-x:none; background-color: rgba(135,215,215,0.2); border-style: inset; border-width:1px; border-color: rgba(175,135,255.0.5); display:inline-block; ">
        <p>
            The following rules must be obeyed by every student who resides in NIT AP hostels:</p>
        <p>
1. I always obey the rules and regulations of the Institute / hostels that are issued time-to-time during my
stay.</p><p>
2. I am aware that most of the facilities are already created that makes my comfortable stay in the new
hostels. However, some more facilities like wi-fi, shops etc., will be provided in the due course inside the
campus.</p><p>
3. I know that the personal motor vehicles will not be allowed inside the campus.</p><p>
4. I will take permission to use the private vehicle (Taxi/Auto etc.,) only if, I have heavy luggage with me or
if, I am sick.</p><p>
5. I am aware that, outside food will not be permitted to the hostel rooms and it is only permitted upto the
dining halls.</p><p>
6. I am aware that food delivery boys will not be allowed inside the campus and if I order outside food, I
have to go to main gate of the Institute to collect the food.</p><p>
7. I am aware that, I need to mandatorily enter my movement in the movement register kept in the hostels
and I will do the same.</p><p>
8. I will always cooperate with the Institute / hostel staff and I will not mis-behave with the Chief Warden,
Warden, Deputy Warden, staff members or any other person working in the hostel.</p><p>
9. I am aware that, the lockable almirahs are provided to each resident of the hostel and I will be responsible
for the safeguard of all my belongings.</p><p>
10. I will come back to hostel before the prescribed time as notified by the hostel management. I am also
aware that during my outing period, I am responsible for my safety and security and the Institute or hostel
management is no way responsible for any untoward incident happening outside. While going out of the
Hostel, I will carry my Hostel Card/Institute Identity Card.
(Outing timings are 6.00 AM to 8.00 PM on all the days)</p><p>
11. I will be inside the hostel by 8.00 PM on any day, which may be extended with the prior permission from
the warden.</p><p>
12. I am aware that,on repeated late arrival to the hostel after outing, I may be suspended/expelled from the
hostel/Institute.</p><p>
13. I will not indulge in gambling, smoking, consuming liquor, narcotic drugs or any other intoxicants inside
/outside of the Institute/Hostel. If I am found in such intoxicated condition, I will accept any punishment
imposed by the hostel management/Institute authorities including expulsion from the hostels and or
rustication from the Institute.</p><p>
14. I will not spread any kind of unauthorized data (text/audio/video etc.,) across the social media platforms
(like twitter/ facebook/ Whatsapp etc.,) against the hostels/Institute which can downgrade the reputation
of NIT Andhra Pradesh.</p><p>
15. For any problems in hostels/mess, I will approach the appropriate authorities through a proper channel
and I will abide to the hierarchy.</p><p>
16. I am aware about anti-ragging law and undertake not to indulge, directly or indirectly, in any ragging
activity in the hostel or Institute campus or outside.</p><p>
17. I will not use electrical appliances, such as, electric kettle/stove, electric rice cookers, electric iron,
immersion heater and if I am found using any of these items, I agree to be fined a minimum of Rs.1,000/-
at the first instant, and will have no objection if expelled from the hostel if found using any of these items
for the second time.</p><p>
18. If I break or damage any electrical appliances, switch board or any other articles in hostels, I agree to pay
double the total cost of the material and also be levied fine as applicable.</p><p>
19. I will not allow any day-scholar or outsider in my room without permission and in case of its violation,I
may be suspended/expelled from the hostel/Institute.</p><p>
20. I am aware that, preparing or cooking any type of food is prohibited within the hostel premise/Institute.</p><p>
21. I will not involve / organize in any anti-social activities, strikes / bundh / religious activities that tarnishes
the reputation of theInstitute i.e., NIT Andhra Pradesh.</p><p>
22. I will claim my caution deposit paid if any only at the end of the program duration or at the time of
leaving the program in between.</p>
        </div>
            </div>
        <div style="width:2000px;">
        <input type="checkbox" id="terms" name="terms" value="terms" style="width:20px; float: left; display: inline; margin-left: 200px; margin-right: 10px;" required>
        <label for="terms" style="font-family: calibri; font-size: 20px; display: inline; float: left; margin-top: 18px; margin-left: 0px;">I accept all the terms and conditions.</label>
        </div>
        <script>
        function addText(){
            if (document.getElementById("terms").checked===true){
                sessionStorage.setItem("f","yes");
            }
        }
        </script>
        <script>
            if (sessionStorage.getItem("f")==='yes'){
                document.getElementById("terms").checked=true;
            }else
            function check(){
                if (sessionStorage.getItem('a1') && sessionStorage.getItem('a2') 
                        && sessionStorage.getItem('a3')  && sessionStorage.getItem('a4')
                         && sessionStorage.getItem('a5') && sessionStorage.getItem('a6')
                          && sessionStorage.getItem('a7') && sessionStorage.getItem('a8')
                          && sessionStorage.getItem('b1')  && sessionStorage.getItem('b2')
                           && sessionStorage.getItem('b3')  && sessionStorage.getItem('b4')
                            && sessionStorage.getItem('b5')  && sessionStorage.getItem('b6')
                             && sessionStorage.getItem('b7')  && sessionStorage.getItem('b8')
                              && sessionStorage.getItem('c1') && sessionStorage.getItem('c2')
                               && sessionStorage.getItem('c3')  && sessionStorage.getItem('c4')
                                && sessionStorage.getItem('c5')  && sessionStorage.getItem('c6')
                                 && sessionStorage.getItem('c7')  && sessionStorage.getItem('d1')
                                  && sessionStorage.getItem('d2') && sessionStorage.getItem('d3')
                                   && sessionStorage.getItem('d4') && sessionStorage.getItem('d5')
                                    && sessionStorage.getItem('d6') && sessionStorage.getItem('d7') 
                                     && sessionStorage.getItem('e1')  && sessionStorage.getItem('e2')
                                      && sessionStorage.getItem('e3')  && sessionStorage.getItem('e4')){
                    
                    if (sessionStorage.getItem('f')){
                        location.href='PreviewReg.php'
                    }else{
                        alert('please accept all the terms and conditions in undertaking');
                    }
                }else{
                    alert("please fill all the details");
                }
            }
        </script>
           <button type="button" onclick=" addText();location.href='RegForm5.php'" value="submit" style="margin-top:20px; margin-left:30px; background-color:rgb(135,215,255); height:40px; float: left;">PREVIOUS</button>
        
        <button type="button" onclick="addText(); location.href='PreviewReg.php'" value="submit" style="margin-top:20px; margin-left: 850px;margin-right:40px; background-color:rgb(135,215,255); height:40px; float: right;">NEXT</button>
        
        </div>
         
               
    </body>
</html>