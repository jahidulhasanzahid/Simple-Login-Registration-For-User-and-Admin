 <!-- this will be added to every page  -->
<?php 

session_start();
$student_id = $_SESSION['student_id'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['student_id'])){
  header("location: index.php");

}

?>
