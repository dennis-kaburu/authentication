
<?php
$con=mysqli_connect("localhost","root","root","keystroke");

if (!$con) {
	header("Location:index.php?err=Mysql Connection Error");
}
?>
