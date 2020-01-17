<?php
	require_once("connection.php");
	session_start();
	if(isset($_POST['sub']))
	{
		$name=$_POST['Name'];
		$address=$_POST['Address'];
		$dob=$_POST['DOB'];
		$gender=$_POST['Gender'];
		$qualification=$_POST['Qualification'];
		$mobile=$_POST['Mobile'];
		$batchincharge=$_POST['BatchInCharge'];
		$email=$_POST['Email'];
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		$sql="INSERT INTO faculty(name,address,dob,gender,qualification,mobile,batchincharge,email,username,password) VALUES ('".$name."','".$address."','".$dob."','".$gender."','".$qualification."','".$mobile."','".$batchincharge."','".$email."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:faculty_signup.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['stsub']))
	{
		$admno=$_POST['admNo'];
		$admdate=$_POST['admDate'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$guardian=$_POST['guardian'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="INSERT INTO student(admno,admdate,name,address,dob,gender,mobile,guardian,batch,email,username,password) VALUES ('".$admno."','".$admdate."','".$name."','".$address."','".$dob."','".$gender."','".$mobile."','".$guardian."','".$batch."','".$email."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:student_signup.php');
		}
		mysqli_close($conn);
	}
	/* -------------------------------editprofile------------------------------------------*/
	
		if(isset($_POST['editfac']))
	{
		$name=$_POST['Name'];
		$address=$_POST['Address'];
		$dob=$_POST['DOB'];
		$gender=$_POST['Gender'];
		$qualification=$_POST['Qualification'];
		$mobile=$_POST['Mobile'];
		$batchincharge=$_POST['BatchInCharge'];
		$email=$_POST['Email'];
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		$var=$_SESSION['fid'];
		$sql="UPDATE faculty SET name='".$name."',address='".$address."',dob='".$dob."',gender='".$gender."',qualification='".$qualification."',mobile='".$mobile."',batchincharge='".$batchincharge."',email='".$email."',username='".$username."',password='".$password."' WHERE fid=$var";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:fac_profile.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['editstu']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$guardian=$_POST['guardian'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$var=$_SESSION['sid'];
		$sql="UPDATE student SET name='".$name."',address='".$address."',dob='".$dob."',gender='".$gender."',mobile='".$mobile."',guardian='".$guardian."',batch='".$batch."',email='".$email."',username='".$username."',password='".$password."' WHERE sid=$var";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stud_profile.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['editstu']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$guardian=$_POST['guardian'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$var=$_SESSION['sid'];
		$sql="UPDATE student SET name='".$name."',address='".$address."',dob='".$dob."',gender='".$gender."',mobile='".$mobile."',guardian='".$guardian."',batch='".$batch."',email='".$email."',username='".$username."',password='".$password."' WHERE sid=$var";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stud_profile.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['att']))
	{
		$date=$_POST['date'];
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$h1=$_POST['h1'];
		$h2=$_POST['h2'];
		$h3=$_POST['h3'];
		$h4=$_POST['h4'];
		$sql="INSERT INTO attendance (date,sid,name,batch,status_h1,status_h2,status_h3,status_h4) VALUES ('".$date."','".$sid."','".$name."','".$batch."','".$h1."','".$h2."','".$h3."','".$h4."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:view_studattndc.php');
		}
		mysqli_close($conn);
	}
	
	
	else if(isset($_POST['assmnt']))
	{
		$assessmentno=$_POST['assessmentno'];
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$subject1=$_POST['sub1'];
		$subject2=$_POST['sub2'];
		$subject3=$_POST['sub3'];
		$sql="INSERT INTO assessment (assessmentno,sid,name,batch,subject1,subject2,subject3) VALUES ('".$assessmentno."','".$sid."','".$name."','".$batch."','".$subject1."','".$subject2."','".$subject3."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:view_mark.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['leave']))
	{
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		$reason=$_POST['reason'];
		$status="pending";
		$sql="INSERT INTO leaves (sid,name,batch,fromdate,todate,reason,status) VALUES ('".$sid."','".$name."','".$batch."','".$fromdate."','".$todate."','".$reason."','".$status."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stud_applyleave.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['approve']))
	{
		$id=$_POST['id'];
		$sql="UPDATE leaves SET status='Approved' WHERE id=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stu_leave.php');
		}
		mysqli_close($conn);
	}
	
	else if(isset($_POST['reject']))
	{
		$id=$_POST['id'];
		$sql="UPDATE leaves SET status='Rejected' WHERE id=$id";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stu_leave.php');
		}
		mysqli_close($conn);
	}
?>
