 <!-- this will be added to every page  -->
<?php 

session_start();
$email = $_SESSION['email'];



if(!isset($_SESSION['email'])){
  header("location: admin-index.php");

}

?>
