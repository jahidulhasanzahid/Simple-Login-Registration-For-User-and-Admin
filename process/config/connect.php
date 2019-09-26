<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'masum'); //database name
define('DB_USERNAME','root'); //database user name defult name is root
define('DB_PASSWORD',''); // at this moment my mysql database has no password , so it's empty


$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if( mysqli_connect_error()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		//echo "DataBase is Connected";
	}
?>