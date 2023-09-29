<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>medicine_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="text" name="med_name" placeholder="med_name"> <br><br>
			<input type="number" name="price" placeholder="price"> <br><br>
			<input type="text" name="brand" placeholder="brand"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$med_name=$_POST["med_name"];
	$price=$_POST["price"];
	$brand=$_POST["brand"];
	
$query="INSERT INTO medicine(med_name,price,brand) VALUES('$med_name','$price','$brand')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

