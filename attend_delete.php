<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$attend=$_GET['up_attend'];
$pat_id=$_GET['up_patid'];

$query="DELETE FROM attends WHERE ID='$attend' AND pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/attend_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>