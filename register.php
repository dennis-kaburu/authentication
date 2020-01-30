<?php
require 'config.php';

$fname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
if ($password==$repassword) {
	$insert="INSERT into users (fname,email,phone,password) VALUES('$fname','$email','$phone','$password')";
$query=mysqli_query($con,$insert);
if ($query) {
	header("Location:index.php?msg=Registration Complete");
}else{
		header("Location:signup.php?err=Registration Not Complete ".mysqli_error($con)."");
}

}else{
	header("Location:signup.php?err=Password Not Matching");
}




?>