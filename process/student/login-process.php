<?php
  include("../config/connect.php");
  //include("../config/session.php");
  $student_id = $_POST['student_id'];
  $password = $_POST['password'];
if($student_id=='' or $password == ''){
      echo "<script> alert(' Null Value Input, try again !!') </script>";
      echo "<script> window.open('../../index.php','_self'); </script>";
    
}
else{

if(isset($_POST['student_id']) && ($_POST['password'])){

  $student_id = $_POST['student_id'];
  $password = $_POST['password'];


  $user_login_query = "SELECT `student_id`, `password` FROM `student` WHERE student_id = '$student_id' && password = '$password' LIMIT 1";
  
  $user_login = mysqli_query($con,$user_login_query);

  $count_user = mysqli_num_rows($user_login);


  if($count_user == 1){

    $row= mysqli_fetch_assoc($user_login);


    session_start();
    
    $_SESSION['student_id'] = $student_id;

  
   
      header("location:../../home.php");
      exit();
  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../../index.php','_self'); </script>";
    }

}
}
?>