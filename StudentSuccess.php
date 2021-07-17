<?php
session_start();
$con=mysqli_connect('localhost','root','','hostel_registration') or die(mysqli_error($con));
$username=mysqli_real_escape_string($con, $_POST['usrnm']);
$password=mysqli_real_escape_string($con, $_POST['psw']);
$query="select * from student_login where username='$username'";
$query1="select * from student_login where password='$password'";
$query_result=mysqli_query($con, $query);
$query1_result=  mysqli_query($con, $query1);
$row= mysqli_fetch_array($query_result);
$row1= mysqli_fetch_array($query1_result);
$var=mysqli_num_rows($query_result);
$var1=mysqli_num_rows($query1_result);
if(($var>0) && ($var1>0)){
	$_SESSION_["userType"]="STUDENT";
	  $_SESSION["username"]=$username;
echo "<script>
        var name='$username';
		
		sessionStorage.setItem('username',name);
sessionStorage.setItem('userType','STUDENT');
location.href='StudentDashboard.php';
		</script>";
    

      
     

}
elseif(($var)>0){
   
      header("Location:StudentLoginPortal.php");
      
}

  elseif(($var1)>0){
  
    header("Location:StudentLoginPortal.php");
      
  }
  else{
      header("Location:StudentLoginPortal.php");
      
  } 
  ?>




        
        