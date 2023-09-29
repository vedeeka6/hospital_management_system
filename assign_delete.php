<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$assign=$_GET['up_assign'];
$query="DELETE FROM assigned WHERE pat_ID='$assign'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/assign_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>