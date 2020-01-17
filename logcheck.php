<?php
	include('connection.php');
	session_start();
	if(isset($_POST['submit']))	
	{	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select username from admin where username='".$username."' and password='".$password."' ";
		$result=mysqli_query ($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{	
			while($row=mysqli_fetch_assoc($result))
			{
				header("location:adminhome.php");
			}
		}
		else
		{
				$sql="select fid from faculty where username='".$username."' and password='".$password."' ";
				$result=mysqli_query ($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{	
					while($row=mysqli_fetch_assoc($result))
					{
						session_start();
						$_SESSION['fid']=$row['fid'];
						header("location:facultyhome.php");
					}
				}	
				else
				{
					$sql="select sid from student where username='".$username."' and password='".$password."' ";
					$result=mysqli_query ($conn,$sql);
					if(mysqli_num_rows($result)>0)
					{	
						while($row=mysqli_fetch_assoc($result))
						{
							session_start();
							$_SESSION['sid']=$row['sid'];
							header("location:studenthome.php");
						}
					}
					else
					{
						echo "email or password incorrect";
					}
				}
		}
		mysqli_close($conn);
	}
?>