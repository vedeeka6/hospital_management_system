<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$govern=$_GET['up_govern'];
$roomno=$_GET['up_roomno'];

$query="DELETE FROM governs WHERE ID='$govern' AND room_no='$roomno'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/governs_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>