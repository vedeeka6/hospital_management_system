<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$rec_id=$_GET['up_Recordid'];
$query="DELETE FROM record WHERE rec_ID='$rec_id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/record_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>