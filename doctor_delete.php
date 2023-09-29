<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
$id=$_GET['up_id'];
$query="DELETE FROM doctor WHERE ID='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/doctor_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>

