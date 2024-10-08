<?php
  $con=mysql_connect("localhost","root","");
  if($con==false)
     die("error in connection");

  $tn=$_POST["t1"];
  mysql_select_db("project");
  echo("<table border='2' style='border-color: black;font-size:30px'>");
  echo("<tr><th>Student full Name");
  echo("<th>mobile number<th>SCC Marks<th>HSC STREAM<th>HSC Marks<th>Applied Stram");
  echo("</tr>");
  $res=mysql_query("select * from $tn;");
  while($row=mysql_fetch_array($res))
  {
    echo("<tr><td>".$row[0]);
    echo("</td><td>".$row[2]);
    echo("</td><td>".$row[11]);
    echo("</td><td>".$row[12]);
     echo("</td><td>".$row[13]);
   echo("</td><td>".$row[14]);
   
   }
  echo("</table>");


?>