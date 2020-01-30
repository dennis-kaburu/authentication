<?php
require 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM videos WHERE id='$id'";
$query=mysqli_query($con,$sql);
if ($query) {
	echo 'deleted';
}else{
	echo 'failed';
}