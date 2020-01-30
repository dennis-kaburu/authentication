<?php
require 'config.php';
$id=$_POST['id'];
$sql="SELECT a.full_name,q.num,q.qn,q.created_at,t.name from admin a, questions q, test t WHERE (a.id=q.created_by AND t.id=q.test) AND t.id='$id'" ;
$mysql=mysqli_query($con,$sql);
if (mysqli_num_rows($mysql)>0) {
	$i=1;
	while($row=mysqli_fetch_array($mysql)){
echo '<tr>
<td>'.$i++.'</td>
<td>'.$row['num'].'</td>
<td>'.$row['qn'].'</td>
<td>'.$row['full_name'].'</td>
<td>'.$row['created_at'].'</td>
<td>Delete</td>
<td>Edit</td>

	</tr>';

	}

}else{
	echo '<tr><td colspan="6"> Error No Results Founds'.mysqli_error($con).'</td></tr>';
}