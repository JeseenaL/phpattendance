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
								<li><a href="viewmyattndc.php">Atendance</a></li>
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
			<form action="signup1.php" method="post">
			<?php
				require_once 'connection.php';
				session_start();
				$var=$_SESSION['sid'];
				$sql="select * from student where sid=$var";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
			?>
			
			<h1> EDIT PROFILE </h1>

            <table>

                <tr>
                    <td>Name</td><td>:</td><td><input type="text" value="<?php echo $row['name'];?>" name="name"></td>

                </tr>  
                <tr>
                    <td>Address</td><td>:</td><td><input type="text" value="<?php echo $row['address'];?>" name="address"></td>
                </tr>
				 <tr>
                    <td>DOB</td><td>:</td><td><input type="text" value="<?php echo $row['dob'];?>" name="dob"></td>
                </tr>
                
                <tr>
                    <td>Gender</td><td>:</td><td><input type="text" value="<?php echo $row['gender'];?>" name="gender"></td>
                </tr>
                
                <tr>
                    <td>Mobile</td><td>:</td><td><input type="text" value="<?php echo $row['mobile'];?>" name="mobile"></td>
                </tr>
                <tr>
                    <td>Guardian</td><td>:</td><td><input type="text" value="<?php echo $row['guardian'];?>" name="guardian"></td>
                </tr>
                <tr>
                    <td>Batch</td><td>:</td><td><input type="text" value="<?php echo $row['batch'];?>" name="batch"></td>
                </tr>
                <tr>
                    <td>Email</td><td>:</td><td><input type="text" value="<?php echo $row['email'];?>" name="email"></td>
                </tr>
				 <tr>
                    <td>Username</td><td>:</td><td><input type="text" value="<?php echo $row['username'];?>" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td><td>:</td><td><input type="text" value="<?php echo $row['password'];?>" name="password"></td>
                </tr>
            </table>
				<?php
					}
					?>
            <br><br>
            <input type="submit" value="Save" name="editstu" class="button"><br><br>
          
        </form>
        </div>
	</div>
	</body>
</html>
		