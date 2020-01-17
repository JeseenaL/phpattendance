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
		<form>
			<?php
				require_once 'connection.php';
				session_start();
				$var=$_SESSION['fid'];
				$sql="select * from faculty where fid=$var";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
			?>
			<h1> <?php echo $row['name'];?> </h1> <br>
			
	<table>
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
        <td>Qualification</td><td>:</td><td><?php echo $row['qualification'];?></td>
    </tr>
    <tr>
        <td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
    </tr>
    <tr>
        <td>Batch in charge</td><td>:</td><td><?php echo $row['batchincharge'];?></td>
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


	<br>
	<a href="fac_editprofile.php">Edit Profile</a>
</form>
        </div>
	</div>
	</body>
</html>
		