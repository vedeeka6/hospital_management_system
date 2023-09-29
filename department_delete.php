<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$deptid=$_GET['up_deptid'];
$query="DELETE FROM department WHERE deptID='$deptid'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/department_table.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>