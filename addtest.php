<?php
require 'config.php';
$user=$_GET['user'];
$id=$_GET['id'];
$type=$_GET['type'];

$sql="UPDATE users SET test_active='$id', test_type='$type' WHERE id='$user'";
$query=mysqli_query($con,$sql);
if ($query) {
	header("Location:home.php?msg=Test Updated");
}else{
	header("Location:home.php?err=Test Not Updated ".mysqli_error($con));
}