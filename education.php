
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a1
		{
          margin-left: 10%;
          margin-right: 10%;
          margin-top: 8%;
          padding-top: 2%;
          font-size: 150%;
          padding-bottom: 4%;
          background-color: azure;
          border-radius: 25px;

		}
    .a2{
    	color: brown;
      
    }
    .a3{
    	margin-left: 5%;
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
<body style="color: brown;text-align:center;background-color: silver;">
	<img src="rbnb_header.jpg" style="margin-left:4%;">
<form action="dis.php" method="post" class="a1">
	
		<h1 style="margin-left:3%;color: red;">educational information</h1><br><br>
		
   

		<label class="a2">SSC percentage</label>
		<input type="text" name="s1" placeholder="enter percentage" value="" autofocus class="a3" required><br><br>

 <label>HSC stream</label>
        <select name="s2" class="a3" required>
        	<option value="">choose</option>
        	<option value="scie">science</option>
        	<option value="commer">commerce</option>
        	<option value="arts">arts</option>
        </select><br><br>

		<label>HSC percentage</label>
		<input type="text" name="s3" placeholder="enter percentage" value="" class="a3" required><br><br>

<label>select course which<br> you want to apply for</label>
        <select name="s4" class="a3" required>
            <option value="">choose</option>
            <option value="BCA">BCA(Bachelor of Computer Applications)</option>
            <option value="BCOM">B.Com(Bachelor of Commerce)</option>
            <option value="BSC">B.Sc(Bachelor of Science)</option>
            <option value="BA">BA(Bachelor of Arts)</option>
            <option value="BCS">BSC(Computer Science)</option>
            <option value="BBACA">BBACA</option>
        </select><br>
        <input type="reset" class="button">
         <button class="button" name="submit" ><span> Submit </span></button>
	</fieldset>
</form>


<br>
<br>
<br>
<br>
<br>

 <div class="container"> 	
      	<div class="row">
      		<div class="col-md-4" style="background-color:black; color:white;">
      			<h2 style="margin-top:30px;">USEFULL LINKS</h2>
      			<h6 class="anchor"><a href="" style="color:white;">Home</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Contact</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Addmission</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Academics</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Facilites</a></h6>
      			<h6 class="anchor"><a href="" style="color:white;">Gallery</a></h6>

      		</div>


      		<div class="col-md-4" style="background-color:black;">
      			<h2 style="color:white; margin-top:30px;">ABOUT</h2>
      			<h6 style="color:white;">
                   RAYAT SHIKSHAN SANSTHA'S <br>
                   R. B. NARAYANRAO BORAWAKE COLLEGE, SHRIRAMPUR Estd. 1960<br>

                   Affiliated to Savitribai Phule Pune University<br>

                   NAAC Accredited 'A+' Grade College with 3.44 CGPA<br>

                   ISO 9001:2015 CERTIFIED</h6>
      			


      		</div>


      		<div class="col-md-4" style="background-color:black;">
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
<br>
<br>



</body>
</html>
<?php 
session_start();

$_SESSION['$pname']=$_POST['t1'];
$_SESSION['$poccu']=$_POST['t2'];
$_SESSION['$pno']=$_POST['t3'];
$_SESSION['$padd']=$_POST['t4'];






?>