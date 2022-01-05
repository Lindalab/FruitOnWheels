<?php
require ("dbconnection.php");
require ("function.php");
if(isset($_POST['LoginSubmit']))
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ademail=$_POST['email'];
$adpassword=$_POST['psw'];
$gender=$_POST['gender'];

$mail="Admin Registration Succeful";
Insert("INSERT INTO `admin`( `fname`, `lname`, `email`, `gender`, `password`)
 VALUES ('$fname','$lname','$ademail','$adpassword','$gender')",$mail); 


?>