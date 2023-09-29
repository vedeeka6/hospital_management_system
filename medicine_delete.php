<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$med_name=$_GET['up_medname'];
$query="DELETE FROM medicine WHERE med_name='$med_name'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/medicine_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>