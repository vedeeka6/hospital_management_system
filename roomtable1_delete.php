<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$room_no=$_GET['up_roomNo'];
$bed_no=$_GET['up_bedno'];

$query="DELETE FROM roomtable1 WHERE room_no='$room_no' AND bed_no='$bed_no'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/roomTable_1.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>