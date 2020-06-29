<?php 

$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$message=$_POST["message"];
$myDate = date('Y/m/d');
$c=mysql_connect('sql308.epizy.com','epiz_24116481','sxDWheSLzI') or die ("not connected");
$g=mysql_select_db("epiz_24116481_myblog",$c);
$s="insert into contacts values(0,'$name','$email','$sub','$message','$myDate')";
$dq=mysql_query($s);
echo"<script type=\"text/javascript\">alert(\"Message Sent Successfully\");</script>";
echo"<script type=\"text/javascript\">window.location = \"http://pavankulkarni123.rf.gd/\";</script>";

?>   