<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>is_prescribed_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="pat_ID" placeholder="pat_ID"> <br><br>
			<input type="text" name="med_name" placeholder="med_name"> <br><br>
			<input type="text" name="dose" placeholder="dose"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$pat_ID=$_POST["pat_ID"];
	$med_name=$_POST["med_name"];
	$dose=$_POST["dose"];
$query="INSERT INTO is_prescribed(pat_ID,med_name,dose) VALUES('$pat_ID','$med_name','$dose')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

