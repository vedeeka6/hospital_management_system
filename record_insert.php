<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>record_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="text" name="admit_date" placeholder="admit_date"> <br><br>
			<input type="text" name="discharge_date" placeholder="discharge_date"> <br><br>
			<input type="text" name="ID" placeholder="ID"> <br><br>
			<input type="text" name="pat_ID" placeholder="pat_ID"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$admit_date=$_POST["admit_date"];
	$discharge_date=$_POST["discharge_date"];
	$ID=$_POST["ID"];
	$pat_ID=$_POST["pat_ID"];
$query="INSERT INTO record(admit_date,discharge_date,ID,pat_ID) VALUES('$admit_date','$discharge_date','$ID','$pat_ID')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

