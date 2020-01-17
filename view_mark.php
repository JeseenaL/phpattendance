<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
			table,td,th{border:2px solid black;
						border-collapse:collapse;
						background-color:grey;
						text-align:center;
						padding:10px;}
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
				<h1>Enter Mark</h1><br><br>
			<table>
				<thead>
					<tr>
						<th>AssessmentNo</th>
						<th>Sid</th>
						<th>Name</th>
						<th>Batch</th>
						<th>Subject1</th>
						<th>Subject2</th>
						<th>Subject3</th>
					</tr>
				</thead>
				<tbody>
					<tbody>
					<?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['fid'];
						$sql="select * from faculty where fid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
							$b=$row['batchincharge'];
						}
					?>
					<?php
						require_once 'connection.php';
						$sql="select * from student where batch='".$b."'";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>	
					<tr>
						<form action="signup1.php" method="post">
							<td> <select name="assessmentno"> 
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
								 </select> </td>
							<td> <input type="text" value="<?php echo $row['sid'];?>" name="sid"> </td>
							<td> <input type="text" value="<?php echo $row['name'];?>" name="name"> </td>
							<td> <input type="text" value="<?php echo $row['batch'];?>" name="batch"> </td>
							<td> <input type="text" name="sub1"> </td>
							<td> <input type="text" name="sub2"> </td>
							<td> <input type="text" name="sub3"> </td>
							<td> <input type="submit" name="assmnt" value="OK"> </td>
						</form>	
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<br>
			</div>
	</div>
	</body>
</html>
		