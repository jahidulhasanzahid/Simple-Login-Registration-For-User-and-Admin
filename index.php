<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="asset/login-style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


		<div class="container">
	        <div id="login-row" class="row justify-content-center align-items-center">
	            <div id="login-column" class="col-md-6">
	                <div class="box">
	                    <div class="shape1"></div>
	                    <div class="shape2"></div>
	                    <div class="shape3"></div>
	                    <div class="shape4"></div>
	                    <div class="shape5"></div>
	                    <div class="shape6"></div>
	                    <div class="shape7"></div>
	                    <div class="float">
	                    	<!--form design-->
	                    	<!-- action is for use process file, like where php script is define for develop a login-- and method is process data-->
	                        <form class="form" action="process/student/login-process.php" method="post">
	                            <div class="form-group">
	                                <label for="student_id" class="text-white">Student ID:</label><br>
	                                <input type="text" name="student_id" id="student_id" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password" class="text-white">Password:</label><br>
	                                <input type="password" name="password" id="password" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <em>If you are not a Registered User,Please Registration First. <a href="registration.php">Sign Up</a></em>
	        </div>
	    </div>



	<!--javascript,propper,jquery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>