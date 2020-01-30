<?php
require 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$query=mysqli_query($con,$sql);
if (mysqli_num_rows($query)>0) {
session_start();
$_SESSION['admin_key']=mysqli_fetch_array($query);
header("Location:home.php");
}else{
	header("Location:index.php?Unable to login ".mysqli_error($con)."");
}