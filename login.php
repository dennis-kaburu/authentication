<?php 
require 'config.php';


$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * from users WHERE email='$email' AND password='$password'";
$query =mysqli_query($con,$sql);
if (mysqli_num_rows($query)>0) {
	session_start();
	$info=array();
	while ($row=mysqli_fetch_array($query)) {
$info=$row;

	}

	$_SESSION['keystroke_u']=$info;
	header("Location:home.php");
}else{

	header("Location:index.php?err=Login Error ".mysqli_error($con)."");
}


?>