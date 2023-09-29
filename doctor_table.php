<!DOCTYPE html>
<html>
<head>
	<title>Doctors_Record</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">


	<style type="text/css">
		table tr,td,th{
			border: 2px solid #000;
			color: #354461;
			font-size: 14px;
			font-family: monospace;
			text-align: left;
		}
		th {
			background-color: #354461;
			color: white; 
		}
		table{
			border-collapse: collapse;
		}
		.update{
			background-color: green;
			color: white;
			outline: none;
			border-radius: 6px;
		}
		.delete{
			background-color: red;
			color: white;
			outline: none;
			border-radius: 6px;
		}
		tr:nth-child(odd) {background-color: #52b2bf}

	</style>
</head>
<body>
		<div class="logo">
		<div class="col md-3">
			<a href="doctor_insert.php" class="btn-contact mt-20px" >INSERT DATA</a>

		</div>

	<table>
		<form>
			<u><h2 style="text-align: center; color: #23304a; ">DOCTORS TABLE</h2></u>
		</form>
		<tr>
			<th width="3%">Doctor_ID</th>
			<th>Staff_Name</th>
			<th>Address</th>
			<th>Contact_No</th>
			<th>Date_Of_Birth</th>
			<th>Email_Id</th>
			<th>Salary</th>
			<th>Experience</th>
			<th>Specialization</th>
			<th>Dept_Id</th>
			<th>Password</th>
			<th width="13%">Operations</th>




		</tr>
		<?php
		
		$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
		$sql="SELECT * FROM doctor";
		$result=$con-> query($sql);

		if ($result -> num_rows > 0) {
			while($row=$result -> fetch_assoc()){
				echo
				"<tr>
				<td>" .$row["ID"] . "</td>
				<td>" . $row["staff_name"] . "</td>
				<td>" . $row["address"] . "</td>
				<td>" . $row["contact"] . "</td>
				<td>" . $row["dob"] . "</td>
				<td>" . $row["email"] . "</td>
				<td>" . $row["salary"] . "</td>
				<td>" . $row["experience"] . "</td>
				<td>" . $row["specialization"] . "</td>
				<td>" . $row["deptID"] . "</td>
				<td>" . $row["password"] . "</td>

				<td><a href='update_doctor.php?up_id=$row[ID]'><input type='submit' value='UPDATE' class='update'> </a>

				<a href='doctor_delete.php?up_id=$row[ID]'><input type='submit' value='DELETE' class='delete' onclick = 'return checkdelete()'> </a></td>

				</tr>" ;
				
				
				
			}
		}
		else{
			echo "no results";
		}
		$con -> close();

		


		?>
		
	</table>
	<script>
		function checkdelete()
		{
			return confirm('Are you sure, you want to delete this record ?');
		}
	</script>

</body>
</html>