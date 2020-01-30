<?php
require 'config.php';
$qn_value=$_POST['qn'];
$number=$_POST['num'];
$user=$_POST['user'];
$test=$_POST['test'];
$respnse = array();
$sql="INSERT into vid_qn(qn,num,vid_id,created_by) VALUES ('$qn_value','$number','$test','$user')";
$query=mysqli_query($con,$sql);
if ($query){
	$respnse['code']="success";
	$respnse['msg']="Quesntions Successifully Added";
	echo json_encode($respnse);
}else{
$respnse['code']="failed";
	$respnse['msg']="Quesntions were not Successifully Added ".mysqli_error($con);	
	echo json_encode($respnse);
}