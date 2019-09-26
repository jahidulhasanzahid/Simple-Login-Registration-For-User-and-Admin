<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="asset/regi.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


		<div class="container">
							<!--form design-->
	                    	<!-- action is for use process file, like where php script is define for develop a registration-- and method is process data-->
	        <form action="process/student/registration-process.php" method="post">
			  <div class="container">
			    <h1>Register</h1>
			    <hr>
			    <label for="id"><b>Student ID</b></label>
			    <input type="text" placeholder="Enter Student ID" name="student_id" required>

			    <label for="name"><b>Student Name</b></label>
			    <input type="text" placeholder="Enter Student Name" name="student_name" required>

			    <label for="department"><b>Student Department</b></label>
			    <input type="text" placeholder="Enter Student Department" name="student_dept" required>

			    <label for="password"><b>Password</b></label>
			    <input type="password" placeholder="Enter Student Password" name="password" required>
			    <hr>

			    <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign Up">
			  </div>

			  <div class="container signin">
			    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
			  </div>
			</form>
	    </div>



	<!--javascript,propper,jquery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>