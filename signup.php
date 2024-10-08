
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="ISO-8859-1">
<title>SignUp</title>
<style>

body
{
   background:#7d1ac4;        
  font-style:Zorina;
}
h1
{
 background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 
  border-radius:25px;
   border-width: thick;
  border-color:#EF8354;
  padding:20;
  border-style:solid;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  
 
  color:  red;
 
  
  @keyframes mymove {
  from {background-color:background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ ;}
  to {background-color: blue;}
  
  
  }
 .a1{
    color: red;
    text-decoration-color: ;
 } 
  
}
.container
{
   
 color: #BFC0C0;
    border-radius:20px;
    border-style:solid;
      border-width: thick;
    
    border-color:#EF8354;
   margin: 150px ;
   position: absolute;
  top: 15px;
  right: 350px;
  width:500px;
  font-size: 18px;
  padding: 60px;
  
  
  
   
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
  margin: 5px;
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

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

h2
{
     color:orange;
     font-size:400%;
     margin:10px;
 
}

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}



input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}



input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}


        }
</style>
</head>
<body>
  <form method="post" action="signup.php">
<h1>🙋Welcome To RBNB COLLGE || Sign Up || Join The Journey To Learn</h1>
    <h3 align="center" style="color:#FFFFFF;"><marquee><b>👉Please Fill This Form To Create An Account👈 </b></marquee></h3><br>
    
   
    

  
    
    
    
    
   <div class="container">
    <label for="email" style="color:orange;"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="t1" required><br><br>
    <label for="Last Name" style="color:orange;"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="t2" required><br>
    <br>
     <label for="Contact No" style="color:orange;"><b>Contact No</b></label>
    <input type="number" placeholder="Enter Contact No" name="t3" required>
   
    <br>
    <label for="Aadhar No" style="color:orange;"><b>Aadhar No</b></label>
    <input type="number" placeholder="Enter Aadhar No" name="t4" required>
     <label for="City" style="color:orange;"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="t5" required><br><br>
    
          <label for="text" style="color:orange;"><b>Username</b></label>
     <input type="text" placeholder="Create User name" name="u" required><br><br>
           <label for="text" style="color:orange;"><b>Password</b></label>
     <input type="text" placeholder="enter password" name="p">
   
  <button class="button" name="submit" ><span> Submit </span></button>
   <input type="reset" class="button" style="margin-left:15%">
 
    </div>
   
 </form>   
</body>

</html>

<?php
  $con=mysql_connect("localhost","root","");

   if ($con==false) {
      die("Could not connect to database");
   }

if(isset($_POST['submit']))
{
$fname=$_POST["t1"];  
$lname=$_POST["t2"];  
$cont=$_POST["t3"];  
$adhar=$_POST["t4"];  
$city=$_POST["t5"];  
$user=$_POST["u"];  
$pass=$_POST["p"];

mysql_select_db("project");
$res=mysql_query("insert into studlogin values('$fname','$lname',$cont,$adhar,'$city','$user','$pass')");

if($res==true)
   header("location:loginform.php");
else
   echo("error in insert query...");

}
?>