<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$pay_id=$_GET['up_payid'];
$query="SELECT * FROM payment WHERE pay_ID='$pay_id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>payent_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE PAYMENT DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Pay_ID</label>
				<input type="number" name="pay_ID" placeholder="pay_ID" value="<?php echo $result['pay_ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Doctor_fees</label>
				<input type="number" name="doc_fees" placeholder="doc_fees" value="<?php echo $result['doc_fees'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Room_charges</label>
				<input type="number" name="room_charges" placeholder="room_charges" value="<?php echo $result['room_charges'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Medicine_price</label>
				<input type="number" name="med_price" placeholder="med_price" value="<?php echo $result['med_price'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Pay_method</label>
				<input type="text" name="pay_method" placeholder="pay_method" value="<?php echo $result['pay_method'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Patient_ID</label>
				<input type="number" name="pat_ID" placeholder="pat_ID" value="<?php echo $result['pat_ID'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/payment_table.php"/>

	<?php 
	$pay_ID=$_POST["pay_ID"];
	$doc_fees=$_POST["doc_fees"];
	$room_charges=$_POST["room_charges"];
	$med_price=$_POST["med_price"];
	$pay_method=$_POST["pay_method"];
	$pat_ID=$_POST["pat_ID"];

$query="UPDATE payment set pay_ID='$pay_ID',doc_fees='$doc_fees',room_charges='$room_charges',med_price='$med_price',pay_method='$pay_method',pat_ID='$pat_ID' WHERE pay_ID='$pay_id'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>