<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/style.css"		
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
				<li> <a href="#">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="stu_details.php">Personal details</a></li>
							<li><a href="stu_attndc.php">Attendance</a></li>
							<li><a href="stu_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="fac_details.php">Faculty Details</a>
				<li><a href="stu_leave.php">Leave Management</a>
				<li><a href="login.php">Logout</a>
			</ul>
			</div>
		
		<div class="cont">
		<form action="signup1.php" method="post">
			<h1>ADD STUDENT</h1><br>
			<input type="text" placeholder="AdmNo" name="AdmNo"class="frm" >
            <input type="text" placeholder="AdmDate" name="AdmDate"class="frm" >
            <input type="text" placeholder="Name" name="Name"class="frm" >
            <input type="text" placeholder="Address" name="Address"class="frm" >
            <input type="text" placeholder="DOB" name="DOB"class="frm" >
            <input type="text" placeholder="Gender" name="Gender"class="frm" >
            <input type="text" placeholder="Mobile" name="Mobile"class="frm" >
			<input type="text" placeholder="Guardian" name="Guardian"class="frm" >
            <input type="text" placeholder="Batch" name="Batch"class="frm" >
            <input type="text" placeholder="Email" name="Email"class="frm" >
            <input type="text" placeholder="Username" name="Username" class="frm">
			<input type="text" placeholder="Password" name="Password" class="frm">

			
			<input type="submit" value="SignUp" class="button" name="stsub">
		</form>
		</div>
		
		
		</div>
	</body>
</html>
	