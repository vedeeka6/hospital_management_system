<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>payment_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="pay_ID" placeholder="pay_ID"> <br><br>
			<input type="number" name="doc_fees" placeholder="doc_fees"> <br><br>
			<input type="number" name="room_charges" placeholder="room_charges"> <br><br>
			<input type="number" name="med_price" placeholder="med_price"> <br><br>
			<input type="text" name="pay_method" placeholder="pay_method"> <br><br>
			<input type="number" name="pat_ID" placeholder="pat_ID"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$pay_ID=$_POST["pay_ID"];
	$doc_fees=$_POST["doc_fees"];
	$room_charges=$_POST["room_charges"];
	$med_price=$_POST["med_price"];
	$pay_method=$_POST["pay_method"];
	$pat_ID=$_POST["pat_ID"];
$query="INSERT INTO payment(pay_ID,doc_fees,room_charges,med_price,pay_method,pat_ID) VALUES('$pay_ID','$doc_fees','$room_charges','$med_price','$pay_method','$pat_ID')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

