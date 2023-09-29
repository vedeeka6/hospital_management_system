<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$rec_id=$_GET['up_Recordid'];
$query="SELECT * FROM record WHERE rec_ID='$rec_id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>record_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE RECORD DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Admit_date</label>
				<input type="text" name="admit_date" placeholder="admit_date" value="<?php echo $result['admit_date'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Discharge_date</label>
				<input type="text" name="discharge_date" placeholder="discharge_date" value="<?php echo $result['discharge_date'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Receptionist_ID</label>
				<input type="text" name="ID" placeholder="ID" value="<?php echo $result['ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Patient_ID</label>
				<input type="text" name="pat_ID" placeholder="pat_ID" value="<?php echo $result['pat_ID'];?>"> <br><br>
			</div>



			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/record_table.php"/>

	<?php 
	$admit_date=$_POST["admit_date"];
	$discharge_date=$_POST["discharge_date"];
	$ID=$_POST["ID"];
	$pat_ID=$_POST["pat_ID"];
$query="UPDATE record set admit_date='$admit_date',discharge_date='$discharge_date',ID='$ID',pat_ID='$pat_ID' WHERE rec_ID='$rec_id'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>