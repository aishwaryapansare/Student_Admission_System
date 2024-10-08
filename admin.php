<?php
session_start();
$user=$_SESSION['$user'];
?>


<!DOCTYPE html>
<html>
<head>
 <script language="javascript"  src="admin.js">   
</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" />
	<title>College Website</title>

  <!-- links -->
   <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />
    <!----------------- icon ------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style type="text/css">
    	.nav-link:hover{
    		background-color: red;
			color:blue !important;
		}
		.anchor{
			text-decoration: none;
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
  position:center;
  
}

    </style>

<!--css-->

			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">

			<!-- js-->

			<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
			<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>

			<!-- onile cdn -->

			<!--css-->

			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

			<!-- js-->

	     	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


            <!-- icon cdn -->
	          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


		</head>
		<body>
      <!-- header -->
        <div class="container-fluid" style="background-color:red">
          <div class="row">
            <div class="col-md-12">
              <img src="rbnb_header.jpg" style="margin-left:90px">
            </div>
          </div>
        </div>







			<!-- navbar -->
		<div class="row">

			<div class="col-md-3">
				<img src="rblogo.jpeg" class="mt-2">
			</div>
			<div class="col-md-6">
				<h1 style="float-left" class="text-primary">RBNB COLLEGE ,SHRIRAMPUR</h1><br>
				<h6 style="float-left" class="text-dark">NAAC accertified "A" Grade(3.62 CGPA | AISHE Code:C-41234</h6>
				<h6 style="float-left" class="text-dark">UCG Speacial Heritage Status | UCG -College of Excellence(CE) | (DBT)</h6>
				<h6 style="float-left" class="text-dark">STAR Status</h6>
				<h6 style="float-left" class="text-dark">#R.B.N.B.Road,Borawake Nagar,Shrirampur-413725</h6>
			</div>
			<div class="col-md-3">
				<img src="user.jpg" style="height:35px">
                 <span>
                 	<input style="margin-left:5%;text-align: center;font-size: 20px;font-weight: bold;font-family: arial;color: darkred;background-color: whitesmoke;" value='<?PHP echo $user; ?>'>
                 </span>
      </div>
</div>
<hr>
<h1 style="color:orange;text-align: center;margin-top: 5%;">Welcome Mr.<?php echo $user;?> </h1>











<form method="post" id='frm' name="frm"  action="javascript:search(document.getElementById('frm'));">
<h1 style="margin-top: 4%;color:maroon;margin-left: 6%;font-family: italian;">Select The Stream To See Student Admission Form


<select name="t1"  id="t1" style="color:maroon;margin-left: 2%;" >
            <option value="">choose</option>
            <option value="BCA">BCA(Bachelor of Computer Applications)</option>
            <option value="BCOM">B.Com(Bachelor of Commerce)</option>
            <option value="BSC">B.Sc(Bachelor of Science)</option>
            <option value="BA">BA(Bachelor of Arts)</option>
            <option value="BCS">BSC(Computer Science)</option>
            <option value="BBACA">BBACA</option>
        </select><br>

</h1>
<input type="submit" value="DISPLAY" class="button" style="margin-left: 45%;margin-top: 8%;">
</form>


<div name="txt"  id="txt" style="background-color:wheat;size: 15%;color: darkred;font-weight: bold;border-color: black;align-content: center;margin-left: 17%;margin-right: 17%;margin-top: 5%;">
	
</div>



<br>
<br>
<br>
<br>
<br>

<hr>
     <!-- *****************  footer  

     	*********** -->
    
      <div class="container"> 	
      	<div class="row">
      		<div class="col-md-4" style="background-color:silver; color:white;">
      			<h2 style="margin-top:30px;">USEFULL LINKS</h2>
      			<h6 class="anchor"><a href="" style="color:white;">Home</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Contact</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Addmission</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Academics</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Facilites</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Gallery</a></h6>

      		</div>


      		<div class="col-md-4" style="background-color:silver;">
      			<h2 style="color:white; margin-top:30px;">ABOUT</h2>
      			<h6 style="color:white;">
                   RAYAT SHIKSHAN SANSTHA'S <br>
                   R. B. NARAYANRAO BORAWAKE COLLEGE, SHRIRAMPUR Estd. 1960<br>

                   Affiliated to Savitribai Phule Pune University<br>

                   NAAC Accredited 'A+' Grade College with 3.44 CGPA<br>

                   ISO 9001:2015 CERTIFIED</h6>
      			


      		</div>


      		<div class="col-md-4" style="background-color:wheat;">
      			<h2 style="margin-top:30px; color:white;">Contact Us</h2>
    			<h6 style="color:white;">R.B.NARAYANRAO BORAWAKE COLLEGE, Shrirampur <br>
                    Maharashtra, INDIA<br>
                    Pin code : 413709<br><br>
                    Phone : +91 0123456789 <br> <br>
                    Fax : +91 02422-222347 <br><br>
                    E-mail : rbnbcollege@gmail.com <br><br>
    			</h6>
      		</div>
      		<div class="col-md-4" style="background-color:black;">
      		
      		</div>
      	</div>
      </div>
     
<!---------Footer--------->


<br>
<br>
<br>


<!-- Copyright -->
    <div>
       <footer class="footer text-center bg-light" >
  © Copyright RBNBCollege College Website  All Rights Reserved.
    Designed & Developed By:Abuj yogesh and Sohel Patel
    <br>
    Contact:937930885
</footer>
    </div>

<br>
</body>
</html>



</body>
</html>
