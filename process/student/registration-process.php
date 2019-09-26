<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	
	$student_id = $_POST['student_id'];
	$student_name = $_POST['student_name'];
	$student_department = $_POST['student_dept'];
	$password = $_POST['password'];

	
	if($student_id =='' or $student_name =='' or $student_department =='' or $password ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('../../registration.php','_self')</script>";
		exit();
	}
	else{
		
		$result = "INSERT INTO `student`(`student_id`, `student_name`, `student_dept`,`password`) VALUES ('$student_id','$student_name','$student_department','$password')";
		
	
	$check = mysqli_query($con,$result);
	if($check){
		echo "<script>alert('Registration Create successfully.You need to login for visit...')</script>";
		echo "<script>window.open('../../index.php','_self')</script>";
		
	}
	else{
		
		echo "Check Something is create a problem!";
	}
}
}
?>