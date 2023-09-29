<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$receptionist_id=$_GET['up_Rid'];
$query="DELETE FROM receptionist WHERE ID='$receptionist_id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/receptionist_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>