<?php
session_start();

header("location:admin-index.php");

session_destroy();

?>