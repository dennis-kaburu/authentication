<?php
$time = $_GET['q'];
$id=$_GET['id'];
$qn=$_GET['qn'];
echo  "i recieved ".$time;

 $txt = $time;
if (is_dir('logs/'.$id)) {
 $myfile = file_put_contents('logs/'.$id.'/time_'.$qn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 //echo json_encode($Info);
 }else{
mkdir('logs/'.$id,0777,true);
 $myfile = file_put_contents('logs/'.$id.'/time_'.$qn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
// echo json_encode($Info); 	
 }

