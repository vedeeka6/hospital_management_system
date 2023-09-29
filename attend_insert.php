<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>attend_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="text" name="ID" placeholder="ID"> <br><br>
			<input type="number" name="pat_ID" placeholder="pat_ID"> <br><br>
			<input type="text" name="checkup_date" placeholder="checkup_date"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$ID=$_POST["ID"];
	$pat_ID=$_POST["pat_ID"];
	$checkup_date=$_POST["checkup_date"];
$query="INSERT INTO attends(ID,pat_ID,checkup_date) VALUES('$ID','$pat_ID','$checkup_date')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

