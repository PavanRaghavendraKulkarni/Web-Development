<?php
$name=$_POST["name"];
$pwd=$_POST["pwd"];
echo"<!doctype html>";
echo"<html lang=\"en\">";
echo"<head>";
echo"<meta charset=\"utf-8\">";
echo"<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
echo"<link rel=\"stylesheet\" href=\"style.css\">";
echo"<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";


echo"<title>contacts</title>";
echo"</head>";
echo"<body>";
if(($name=="Pavan")&&($pwd=="admin")){

echo"<div class=\"container\">";  
echo"<table class=\"table\">";
echo"    <thead bgcolor=\"blue\" style=color:#ffff;>";
echo"      <tr>";
echo"        <th>sl_no</th>";
echo"        <th>Name</th>";
echo"        <th>Email</th>";
echo"        <th>Subject</th>";
echo"        <th>Message</th>";
echo"        <th>Date</th>";
echo"      </tr>";
echo"    </thead>";
echo"    <tbody>";


$c=mysql_connect('sql308.epizy.com','epiz_24116481','sxDWheSLzI') or die ("not connected");
$g=mysql_select_db("epiz_24116481_myblog",$c);
$s="select * from contacts";
$dq=mysql_query($s);

         while($r1=mysql_fetch_array($dq)){
        
              echo"      <tr>";
                echo"        <td>$r1[0]</th>";
                echo"        <th>$r1[1]</th>";
                echo"        <th>$r1[2]</th>";
                echo"        <th>$r1[3]</th>";
                echo"        <th>$r1[4]</th>";
                echo"        <th>$r1[5]</th>";
                echo"      </tr>";

    }
mysql_close($c);
echo"    </tbody>";
echo"</table>";
}
else{
echo"Invalid";
}
echo"<script src=\"login.js\"></script>";
echo"<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>";
echo"<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>";
echo"<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";
echo"</body>";
echo"</html>";
?>