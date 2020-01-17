<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		</style>  
	</head>
	<body class="bi">
		<div class="display">
			<div class="navbar">
			<h1><u>ADMIN</u></h1>
			<ul>
				<li> <a href="adminhome.php">Home</a> </li>
				<li> <a href="faculty_signup.php">Add Faculty</a> </li>
				<li> <a href="student_signup.php">Add Student</a> </li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="stu_details.php">Personal details</a></li>
							<li><a href="stu_attndc.php">Attendance</a></li>
							<li><a href="stu_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="fac_details.php">Faculty Details</a></li>
				<li><a href="stu_leave.php">Leave Management</a></li>
				<li><a href="login.php">Logout</a></li>
			</ul>
		</div>
				<div>
					<h1>FACULTY DETAILS</h1>
					<br><br>
					<table>
						<thead>
							<tr>
								<th>Fid</th>
								<th>Name</th>
								<th>Address</th>
								<th>DOB</th>
								<th>Gender</th>
								<th>Qualification</th>
								<th>Mobile</th>
								<th>BatchInCharge</th>
								<th>Email</th>
							</tr>
		
						</thead>
						<tbody>
						<?php
							require_once 'connection.php';
							$sql="select * from faculty";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
							<td><?php echo $row['fid'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['address'];?></td>
							<td><?php echo $row['dob'];?></td>
							<td><?php echo $row['gender'];?></td>
							<td><?php echo $row['qualification'];?></td>
							<td><?php echo $row['mobile'];?></td>
							<td><?php echo $row['batchincharge'];?></td>
							<td><?php echo $row['email'];?></td>
						</tr>
						<?php
							}
						?>
		
						</tbody>
					</table>
		
				</div>
	</div>
	</body>
</html>
		