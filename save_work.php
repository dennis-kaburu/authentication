<?php
require 'config.php';
$id=$_POST['id'];
$qns=$_POST['qin_id'];
$q=array();
$q=$qns;
$sqlOK=0;
foreach ($q as $key => $value) {
	$number=$_POST['qn_'.$value];
	//echo $number.'<br>';
	$add_qn="INSERT INTO features (user_id,qn,content) VALUES ('$id','$value','$number')";
	$qn_query=mysqli_query($con,$add_qn);
	if($qn_query){
		$sqlOK=1;
	}else{
		break;
		header("Location:home.php?err=Error While Saving Information");
	}

}
if ($sqlOK==1) {
	mysqli_query($con,"INSERT INTO sat_students(sid) VALUES ('$id')") or die("Error Occured");
	header("Location:home.php?msg=You Finished Your Test Your Instructor Will Send Your Performance");

}else{
	header("Location:home.php?err=Error While Saving Information");
}