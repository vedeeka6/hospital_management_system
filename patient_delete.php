<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$pat_id=$_GET['up_patientid'];
$query="DELETE FROM patient WHERE pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/patient_table1.php"/>

	<?php  
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>