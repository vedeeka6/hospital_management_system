<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$attend=$_GET['up_attend'];
$pat_id=$_GET['up_patid'];

$query="SELECT * FROM attends WHERE ID='$attend' AND pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>doctor_insertion</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE ATTEND DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Doctor_id</label>
				<input type="text" name="ID" placeholder="ID" value="<?php echo $result['ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">patient_ID</label>
				<input type="number" name="pat_ID" placeholder="pat_ID" value="<?php echo $result['pat_ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">checkup_date</label>
				<input type="text" name="checkup_date" placeholder="checkup_date" value="<?php echo $result['checkup_date'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/attend_table.php"/>

	<?php 
	$ID=$_POST["ID"];
	$pat_ID=$_POST["pat_ID"];
	$checkup_date=$_POST["checkup_date"];

$query="UPDATE attends set ID='$ID',pat_ID='$pat_ID',checkup_date='$checkup_date' WHERE ID='$attend' AND pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>