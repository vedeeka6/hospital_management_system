<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$prescribed=$_GET['up_prescribe'];
$med_name=$_GET['up_medname'];

$query="DELETE FROM is_prescribed WHERE pat_ID='$prescribed' AND med_name='$med_name'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/is_prescribed_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>