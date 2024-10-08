<!DOCTYPE html>
<html>
<head>
   <!-- css -->

  <style type="text/css"> body
{
   background:orange;  
}
h1
{
background-color:#BFC0C0;

}

.button
{

  border-radius: 4px;
  background-color:#EF8354;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;
  position:right;
  float:right;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  
  
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}


.button:hover span:after {
  opacity: 1;
  right: 0;
}

{box-sizing: border-box;}



/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 80px;
  background-color: yellow;;
  border-style: solid;
  border-color:#EF8354;
  margin-left: 37%;
 
  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 15px 0;
  border: none;
  background: #f1f1f1;

  }

 
.button1
{
 
background-color: #2D3142;
width:110%;
padding:8px;
border-radius:9px;
color:#ffffff;
font-weight: bold;
}


  
  

</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login-Page</title>


  

</head>
<body>
<h1 style=text-align:center;border-style:solid;border-color:#a84232;height:80px;border-radius:25px;font-size:50px;><b>Online  Addmission System  </b></h1>

  <form method="post" class="form-container" id="close" action="loginform.php">
  
   
    <h1 style="margin-left: 15%;margin-bottom: 20%;">Student Login</h1>

    <label for="Id"><b>Id</b></label>
    <input type="text" placeholder="Enter Login Id" id="t1" name="t1" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="t2" name="t2"  required><br>
    



     <button class="button" name="submit" ><span> Submit </span></button>

   <p>  <a href="signup.php"><b>did'nt have account Signup? </b></a></p>
    

  </form>
</div>
 


</body>
</html>

<?php
  $con=mysql_connect("localhost","root","");

   if ($con==false) {
      die("Could not connect to database");
   }

if(isset($_POST['submit']))
{
$uname=$_POST["t1"];  
$pass=$_POST["t2"];  


mysql_select_db("project");

$res=mysql_query("select user,password from studlogin WHERE user='$uname' AND password='$pass'");
if(mysql_num_rows($res)>0)
       header("location:personal.php");
else
    echo("<script>alert('invalid id password');</script>");


}

?>