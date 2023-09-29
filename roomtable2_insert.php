<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>roomtable2_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="text" name="room_type" placeholder="room_type"> <br><br>
			<input type="number" name="charges" placeholder="charges"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	$room_type=$_POST["room_type"];
	$charges=$_POST["charges"];

$query="INSERT INTO roomtable2(room_type,charges) VALUES('$room_type','$charges')";
$data=mysqli_query($con,$query);
if ($data) {
	echo "saved successfully...";
}
}  

?>

</body>
</html>

