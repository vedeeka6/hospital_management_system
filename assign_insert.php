<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>assign_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="pat_ID" placeholder="pat_ID"> <br><br>
			<input type="text" name="room_no" placeholder="room_no"> <br><br>
			<input type="number" name="bed_no" placeholder="bed_no"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$pat_ID=$_POST["pat_ID"];
	$room_no=$_POST["room_no"];
	$bed_no=$_POST["bed_no"];
$query="INSERT INTO assigned(pat_ID,room_no,bed_no) VALUES('$pat_ID','$room_no','$bed_no')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

