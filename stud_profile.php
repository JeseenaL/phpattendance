<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		</style>  
	</head>
	<body class="bi">
		<div class="display">
			<div class="navbar">
				<h1><u>STUDENT</u></h1>
				<ul>
					<li> <a href="studenthome.php">Home</a></li>
					<li> <a href="#">My Profile</a>
						<div class="submenu">
							<ul>
								<li><a href="stud_profile.php">Personal details</a></li>
								<li><a href="viewmyattndc.php">Attendance</a></li>
								<li><a href="viewmymark.php">Mark</a></li>
							</ul>
						</div>
					</li>
					<li> <a href="#">Leave</a>
						<div class="submenu">
							<ul>
								<li><a href="stud_applyleave.php">Apply Leave</a></li>
								<li><a href="stu_appliedleave.php">Applied Leave</a></li>
								
							</ul>
							</div>
					</li>
					<li> <a href="login.php">Logout</a></li>		
				</ul>
			</div>
		<div>
			<form>
				<?php
				require_once 'connection.php';
				session_start();
				$var=$_SESSION['sid'];
				$sql="select * from student where sid=$var";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
			?>
			<h1> <?php echo $row['name'];?> </h1> <br>
				
	
				<table>
	
					<tr>
						
					</tr>
					<tr>
						<td>AdmissionNo</td><td>:</td><td><?php echo $row['admno'];?></td>
					</tr>
					<tr>
						<td>AdmissionDate</td><td>:</td><td><?php echo $row['admdate'];?></td>
					</tr>
					<tr>
						<td>Address</td><td>:</td><td><?php echo $row['address'];?></td>
					</tr>
					<tr>
						<td>DOB</td><td>:</td><td><?php echo $row['dob'];?></td>
					</tr>
					<tr>
						<td>Gender</td><td>:</td><td><?php echo $row['gender'];?></td>
					</tr>
					
					<tr>
						<td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
					</tr>
					<tr>
						<td>Guardian</td><td>:</td><td><?php echo $row['guardian'];?></td>
					</tr>
					<tr>
						<td>Batch</td><td>:</td><td><?php echo $row['batch'];?></td>
					</tr>
					<tr>
						<td>Email</td><td>:</td><td><?php echo $row['email'];?></td>
					</tr>
					<tr>
						<td>Username</td><td>:</td><td><?php echo $row['username'];?></td>
					</tr>
					<tr>
						<td>Password</td><td>:</td><td><?php echo $row['password'];?></td>
					</tr>
				</table>
					<?php	
						}
					?>
					
				<br><br>
				<a href="stud_editprofile.php">Edit Profile</a>
			</form>
			</div>
			
		
		</div>
	</div>
	</body>
</html>
		