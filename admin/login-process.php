<?php
	include('config/connect.php');

	$email = $_POST['email'];
  $password = $_POST['password'];

  if($email=='' or $password == ''){
      echo "<script> alert(' Null Value Input, try again !!') </script>";
      echo "<script> window.open('admin-index.php','_self'); </script>";
    
    }

    else{

    	
    	
    	if(isset($_POST['email']) && ($_POST['password'])){

  $email = $_POST['email'];
  $password = $_POST['password'];


  $user_login_query = "SELECT `email`, `password` FROM `admin` WHERE email = '$email' && password = '$password' LIMIT 1";
  
  $user_login = mysqli_query($con,$user_login_query);

  $count_user = mysqli_num_rows($user_login);


  if($count_user == 1){

    session_start();
    
    $_SESSION['email'] = $email;

  
   
      header("location:home.php");
      exit();
  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('admin-index.php','_self'); </script>";
    }

}
    }



?>