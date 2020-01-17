<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
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
				
				<li><a href="login.php">Logout</a> </li>
					
					
				
				
			</ul>
		</div>
		<div>
			<h1>My Attendance</h1><br><br><br>
			<table>
			<thead>
                    <tr>
                        <th>Date</th>
						<th>Hour1</th>
                        <th>Hour2</th>
						<th>Hour3</th>
						<th>Hour4</th>
                        
                    </tr>

                </thead>
				<?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['sid'];
						$sql="select * from attendance where sid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					
					<tr>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['status_h1'];?></td>
						<td><?php echo $row['status_h2'];?></td>
						<td><?php echo $row['status_h3'];?></td>
						<td><?php echo $row['status_h4'];?></td>
					</tr>
					<?php
						}
					?>
			</table>
		</div>
	</div>
	</body>
</html>
		