<?php 
session_start();

$ssc=$_POST['s1'];
$stream=$_POST['s2'];
$hsc=$_POST['s3'];
$course=$_POST['s4'];



$pname=$_SESSION['$pname'];
$poccu=$_SESSION['$poccu'];
$pno=$_SESSION['$pno'];
$padd=$_SESSION['$padd'];


$name=$_SESSION['$name'];
$email=$_SESSION['$email'];
$mobile=$_SESSION['$mobile'];
$gender=$_SESSION['$gender'];
$dob=$_SESSION['$DOB'];
$add=$_SESSION['$add'];
$state=$_SESSION['$state'];


  $con=mysql_connect("localhost","root","");

   if ($con==false) {
      die("Could not connect to database");
   }

if(isset($_POST['submit']))
{
$uname=$_POST["t1"];  
$pass=$_POST["t2"];  


mysql_select_db("project");

$res=mysql_query("insert into $course values('$name','$email','$mobile','$gender','$dob','$add','$state','$pname','$poccu','$pno','$padd','$ssc','$stream','$hsc','$course')");
if($res == true)
{
       echo('<script>alert("record inserted success....");</script>');
       echo("<script>window.location.href='index.html';</script>");
     
}

else
    echo("<script>alert('record not inserted');</script>");


}


?>