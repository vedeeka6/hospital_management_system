<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$roomtype=$_GET['up_roomtype'];
$query="DELETE FROM roomtable2 WHERE room_type='$roomtype'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/roomTable2.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>