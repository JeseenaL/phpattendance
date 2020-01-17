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
			<h1><u>FACULTY</u></h1>
			<ul>
				<li> <a href="facultyhome.php">Home</a> </li>
				<li> <a href="fac_profile.php">My profile</a> </li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="view_student.php">Personal details</a></li>
							<li><a href="view_studattndc.php">Attendance</a></li>
							<li><a href="view_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="login.php">Logout</a> </li>
			</ul>
		</div>
		<div>
			<form action="signup1.php" method="post">
			<?php
				require_once 'connection.php';
				session_start();
				$var=$_SESSION['fid'];
				$sql="select * from faculty where fid=$var";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
			?>
			
			<h1> EDIT PROFILE </h1>
			
			
<table>

    <tr>
        <td>Name</td><td>:</td><td><input type="text" value="<?php echo $row['name'];?>" name="Name"></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><input type="text" value="<?php echo $row['address'];?>" name="Address"></td>
    </tr>
	<tr>
        <td>DOB</td><td>:</td><td><input type="text" value="<?php echo $row['dob'];?>" name="DOB"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td>:</td><td><input type="text" value="<?php echo $row['gender'];?>" name="Gender"></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><input type="text" value="<?php echo $row['qualification'];?>" name="Qualification"></td>
    </tr>
    <tr>
        <td>Mobile</td><td>:</td><td><input type="text" value="<?php echo $row['mobile'];?>" name="Mobile"></td>
    </tr>
    <tr>
        <td>Batch in charge</td><td>:</td>
		<td><input type="text"  value="<?php echo $row['batchincharge'];?>" name="BatchInCharge"></td>
    </tr>
    <tr>
        <td>Email</td><td>:</td><td><input type="text" value="<?php echo $row['email'];?>" name="Email"></td>
    </tr>
	<tr>
        <td>Username</td><td>:</td><td><input type="text" value="<?php echo $row['username'];?>" name="Username"></td>
    </tr>
    <tr>
        <td>Password</td><td>:</td><td><input type="text" value="<?php echo $row['password'];?>" name="Password"></td>
    </tr>
</table>
	<?php 
		}
	?>
            
 
<br>
	<input type="submit" value="Save" name="editfac" class="button"><br><br>
</form>
        </div>
	</div>
	</body>
</html>
		