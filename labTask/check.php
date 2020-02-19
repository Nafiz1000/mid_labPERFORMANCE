<?php
 
  session_start();

$uname = $_REQUEST['uname'];
$email = $_REQUEST['email'];
$degree = $_REQUEST['degree'];


 if(empty($uname) || strpos("$uname","."))
 {
 	echo "not valid name";
 } 

 if(empty($email) || strpos("$email","@") || strpos("$email","."))
 {
 	echo "not valid email";
 } 
if(!isset($gender))
{
	echo "Gender Not selected";
}
if(!isset($degree))
{
	echo "Degree Not selected";
}

 ?>